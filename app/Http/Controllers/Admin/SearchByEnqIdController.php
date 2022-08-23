<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leadmasters;
use App\Models\paymentDetails;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
class SearchByEnqIdController extends Controller
{
    public function searchByEnq(Request $request) {
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            $key =  $request->bookingRef;
            $paymentDetails = paymentDetails::where('enqueryID', $key)->get();
            $user = User::all();
            if ($request->bookingRef != '' && $request->bookingRef != null) {
                $leads = leadmasters::select('id', 'enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber', 'leadSource', 'leadType', 'created_at', 'createdBy', 'status', 'history', 'empfeedback', 'leadRank', 'assignTo','cp','sp','gst','sp_gst')->whereRaw("enqueryId = '" . $request->bookingRef . "'")->get();
            } else if ($request->contactNo != '' && $request->contactNo != null) {
                $leads = leadmasters::select('id', 'enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber', 'leadSource', 'leadType', 'created_at', 'createdBy', 'status', 'history', 'empfeedback', 'leadRank', 'assignTo','cp','sp','gst','sp_gst')->whereRaw("contactNumber = '" . $request->contactNo . "'")->get();
            } else if ($request->email != '' && $request->email != null) {
                $leads = leadmasters::select('id', 'enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber', 'leadSource', 'leadType', 'created_at', 'createdBy', 'status', 'history', 'empfeedback', 'leadRank', 'assignTo','cp','sp','gst','sp_gst')->whereRaw("email = '" . $request->email . "'")->get();
            } else {
                $leads = leadmasters::select('id', 'enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber', 'leadSource', 'leadType', 'created_at', 'createdBy', 'status', 'history', 'empfeedback', 'leadRank', 'assignTo','cp','sp','gst','sp_gst')->whereRaw("enqueryId = ''")->get();
            }
            return view('admin/search-by-enq-id')->with('data', $leads)->with('paymentDetails', $paymentDetails)->with('users', $user);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function submitValues(Request $request) {
        leadmasters::where('enqueryID', base64_decode($request->enqueryID))->update([
            'cp' => $request->cp,
            'sp' => $request->sp,
            'gst' => $request->gst,
            'sp_gst' => $request->spGst
        ]);
        return back();
    }
    public function productSearching(Request $request) {
        if ($request->ajax()) {
            $data = leadmasters::where('enqueryId', 'LIKE', $request->bookingRef . '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output = '<ul class="list-group" style="dispaly:block;position:relative; z-index:1;">';
                foreach ($data as $row) {
                    $output .= '<li id="enqueryIdSuggestion" class="list-group-item">' . $row->enqueryId . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item">No Data Found</li>';
            }
            return $output;
        }
    }
    public function searchByContactNo(Request $request) {
        if ($request->ajax()) {
            $data = leadmasters::where('contactNumber', 'LIKE', $request->contactNo . '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output = '<ul class="list-group" style="dispaly:block;position:relative; z-index:1;">';
                foreach ($data as $row) {
                    $output .= '<li id="contactNoSuggestion" class="list-group-item">' . $row->contactNumber . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item">No Data Found</li>';
            }
            return $output;
        }
    }
    public function searchByEmail(Request $request) {
        if ($request->ajax()) {
            $data = leadmasters::where('email', 'LIKE', $request->email . '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output = '<ul class="list-group" style="dispaly:block;position:relative; z-index:1;">';
                foreach ($data as $row) {
                    $output .= '<li id="emailSuggestion"  class="list-group-item">' . $row->email . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item">No Data Found</li>';
            }
            return $output;
        }
    }
    public function addPaymentEmail(Request $request) {
        $key =  $request->id;
        $data = leadmasters::select('enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber')->where('id', $key)->get();
        return view('admin/add-payment-email')->with('data', $data)->with('success', 'Email Sent');
    }

    public function addPaymentEmailSave(Request $request) {
        try {
            $date = Carbon::now();
            $paymentDetails = new paymentDetails;
            $paymentDetails->enqueryID = $request->enqueryID;
            $paymentDetails->conformationMailSentOn = $date;
            $paymentDetails->ammountRecived = $request->ammountRecived;
            $paymentDetails->subject = $request->subject;
            $paymentDetails->emailBody = $request->emailBody;
            $paymentDetails->save();
            leadmasters::where('enqueryId',$request->enqueryID)->update(['status'=>'Converted']);
            $data =[
                'subject'=>$request->subject,
                'to'=>$request->mailto,
                'body'=>$request->message
            ];
            Mail::send('admin.mailTemplate', $data, function($message) use ($data) {
                $message->to($data['to']);
                $message->subject($data['subject']);
                $message->from('susanta.das@bluehorse.in','Susanta');
            });
            return response()->json(['code' => 200, 'msg' => 'Sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['code' => 500, 'msg' => $e->getMessage()]);
        }
    }
    public function invoiceEmail(Request $request) {
        $key =  $request->id;
        $data = leadmasters::select('enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber')->where('id', $key)->get();
        return view('admin/invoice-email')->with('data', $data)->with('success', 'Email Sent');
    }
    public function invoiceEmailSend(Request $request) {
        try {
            $data =[
                'subject'=>$request->subject,
                'to'=>$request->mailto,
                'body'=>$request->message
            ];
            Mail::send('admin.mailTemplate', $data, function($message) use ($data) {
                $message->to($data['to']);
                $message->subject($data['subject']);
                $message->from('susanta.das@bluehorse.in','Susanta');
            });
            return response()->json(['code' => 200, 'msg' => 'Sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['code' => 500, 'msg' => $e->getMessage()]);
        }
    }
}
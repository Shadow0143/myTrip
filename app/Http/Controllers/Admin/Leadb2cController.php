<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leadmasters;
use App\Models\comment;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use App\Models\package;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LeadExport;




class Leadb2cController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 3){
            $user = User::all();
            $Logedinuser = User::where('id',auth()->user()->id)->first();
            $leads = leadmasters::select('id', 'enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber', 'leadSource', 'leadType', 'created_at', 'createdBy', 'status', 'history', 'empfeedback', 'leadRank', 'assignTo','URL')->orderBy('id', 'desc')->whereBetween('created_at', array(date('Y/m/d'), date('Y/m/d')))->get();
            return view('admin/leadb2c')->with('data', $leads)->with('users', $user)->with('Logedinuser', $Logedinuser);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function searchLead(Request $request)
    {
        $user = User::all();
        $query = '';
        if ($request->status != '' && $request->status != null) {
            $query .= "`status`='" . $request->status . "'";
        }
        if ($request->start_date != '' && $request->start_date != null) {
            $query .= $query != '' ? " AND DATE(`created_at`) >= '" . $request->start_date . "'" : "DATE(`created_at`) >= '" . $request->start_date . "'";
        }
        if ($request->end_date != '' && $request->end_date != null) {
            $query .= $query != '' ? " AND DATE(`created_at`) <= '" . $request->end_date . "'" : "DATE(`created_at`) <= '" . $request->end_date . "'";
        }
        if ($query != '') {
            $leads = leadmasters::select('id', 'enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber', 'leadSource', 'leadType', 'created_at', 'createdBy', 'status', 'history', 'empfeedback', 'leadRank', 'assignTo','URL')->whereRaw($query)->orderBy('id', 'desc')->get();
        } else {
            $leads = leadmasters::select('id', 'enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber', 'leadSource', 'leadType', 'created_at', 'createdBy', 'status', 'history', 'empfeedback', 'leadRank', 'assignTo','URL')->orderBy('id', 'desc')->get();
        }
        return view('admin/ajaxLeadB2cSearch')->with('data', $leads)->with('users', $user);
    }
    public function leadsDetailsEdit($id)
    {
        $key = $id;
        $leads = leadmasters::where('id', $id)->get();
        $Package = Package::whereNotNull('title')->get();
        return view('admin/edit-lead')->with('leads', $leads)->with('Package', $Package);
    }
    public function leadsDetailsUpdate(Request $request)
    {
        $key = $request->lead_id;
        $contactNumber = ($request->countryCode=='+91') ? $request->contactNumber1 : $request->contactNumber2;
        $data = [
            'leadType' => $request->leadType,
            'customerName' => $request->customerName,
            'email' => $request->email,
            'contactNumber' => $contactNumber,
            'countryCode' => $request->countryCode,
            'address' => $request->address,
            'noOfAdult' => $request->noOfAdult,
            'childWithBed' => $request->childWithBed,
            'childWithNoBed' => $request->childWithNoBed,
            'totalChild' => $request->totalChild,
            'noOfInfant' => $request->noOfInfant,
            'totalPAX' => $request->totalPAX,
            'destination' => $request->destination,
            'jurneyDate' => date("Y-m-d",strtotime(str_replace('/', '-',  $request->arrivalDate))),
            'departureDate' =>date("Y-m-d",strtotime(str_replace('/', '-',  $request->departureDate))),
            'modeOfArrival' => $request->modeOfArrival,
            'modeOfTravel' => $request->modeOfTravel,
            'categoryOfPkg' => $request->categoryOfPkg,
            'hotelCategory' => $request->hotelCategory,
            'foodPlan' => $request->foodPlan,
            'totalTourBudget' => $request->totalTourBudget,
            'durationOfStay' => $request->durationOfStay,
            'additionalFacility' => $request->additionalFacility,
            'remark' => $request->remark,
            'TAT' => date('Y-m-d',strtotime(str_replace('/','-', $request->TAT)))." ".$request->tatTime,
        ];
        leadmasters::where("id", $key)->update($data);
        return 1;
    }
    public function updateLeadb2c(Request $request)
    {
        if ($request->type == 'status') {
            leadmasters::where('id', $request->id)->update([
                'status' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' => "Status update Success full"
            ]);
        } elseif ($request->type == 'assignTo') {
            leadmasters::where('id', $request->id)->update([
                'assignTo' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' => "Assign to update Success full"
            ]);
        } elseif ($request->type == 'rank') {
            leadmasters::where('id', $request->id)->update([
                'leadRank' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' => "Rank update Success full"
            ]);
        } elseif ($request->type == 'jurneyDate') {
            leadmasters::where('id', $request->id)->update([
                'jurneyDate' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' => "Jurney Date update Success full"
            ]);
        } elseif ($request->type == 'departureDate') {
            leadmasters::where('id', $request->id)->update([
                'departureDate' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' => "Departure Date update Success full"
            ]);
        } elseif ($request->type == 'contactNumber') {
            leadmasters::where('id', $request->id)->update([
                'contactNumber' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' => "Contact Number update Success full"
            ]);
        } elseif ($request->type == 'countryCode') {
            leadmasters::where('id', $request->id)->update([
                'countryCode' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' => "Countrycode update Success full"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' => "Update failed"
            ]);
        }
    }
    public function saveComment(Request $request)
    {
        try {
            $comment = new comment;
            $comment->enqueryId = $request->enqueryId;
            $comment->remark = $request->comment;
            $comment->save();
            $data = [
                'subject' => $request->comment,
                'to' => $request->emailTo,
                'body' => $request->comment,
                'from' => $request->emailFrom
            ];
            Mail::send('admin.mailTemplate', $data, function ($message) use ($data) {
                $message->to($data['to']);
                $message->subject($data['subject']);
                $message->from($data['from']);
            });
            return back()->with('Success','Mail Send Successfullt');
        } catch (\Exception $e) {
            return back()->with('Success','Mail not Send Successfullt');
        }
    }
    public function fatchComment(Request $request)
    {
        if ($request->ajax()) {
            $data = comment::where('enqueryId', $request->enqueryId)->get();
            $output = '';
            if (count($data) > 0) {
                foreach ($data as $row) {
                    $output .= '<tr>
                        <td>' . $row->id . '</td>
                        <td>' . $row->enqueryId . '</td>
                        <td>' . $row->date . '</td>
                        <td>' . $row->remark . '</td>
                        <td>' . $row->givenBy . '</td>
                        <td>' . $row->role . '</td>
                        <td>' . $row->buzz . '</td>
                    </tr>';
                }
            } else {
                $output .= '<tr><td colspan="7">No Data Found</td></tr>';
            }
            return response()->json($output);
        }
    }
    public function exportLeads(Request $request){
        $start_lead_date =  $request->start_lead_date;
        $end_lead_date =  $request->end_lead_date;
        $data =leadmasters::select('enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber')->whereBetween('jurneyDate', [$start_lead_date, $end_lead_date])->get();
        return Excel::download(new leadmasters, 'LeadMaster.xlsx');
        
    }
    public function fatchUserEmail(Request $request){
        $rowId =  $request->rowId;
        $leadmaster = leadmasters::where('id',$rowId)->pluck('assignTo')->first();
        $user = User::where('id',$leadmaster)->pluck('email')->first();
        return response()->json(['status'=>true,'email'=>$user]);
        
    }

}
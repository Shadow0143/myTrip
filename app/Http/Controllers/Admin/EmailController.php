<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\package;
use App\Models\QuotationTemplate;
use App\Models\Quotation;
use App\Models\leadmasters;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function email($id) {
        $enqueryId = $id;
        $leadmaster = leadmasters::where('enqueryId',$enqueryId)->first();
        $QuotationTemplate = QuotationTemplate::whereNotNull('packageName')->get();
        $Quotation = Quotation::where('enqueryId',$enqueryId)->get();
        return view('admin/email',compact('leadmaster'))->with('QuotationTemplate',$QuotationTemplate)->with('Quotation',$Quotation);
    }

    public function emailDadta(Request $request)
    {
        // dd($request->all());
        $QuotationTemplate = QuotationTemplate::where('packageName',$request->id)->first();
        $data = $QuotationTemplate->quotationTemplate;
        return $data;
    }
    public function sendEmail(Request $request) {
        // dd($request->all());
        try {
            $data =[
                'subject'=>$request->subject,
                'to'=>$request->mailto,
                'body'=>$request->emailBody
            ];
            Mail::send('admin.mailTemplate', $data, function($message) use ($data) {
                $message->to($data['to']);
                $message->subject($data['subject']);
                $message->from('info@meilleurholidays.com','meilleurholidays');
            });
            return response()->json(['code' => 200, 'msg' => 'Sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['code' => 500, 'msg' => $e->getMessage()]);
        }
    }
    public function saveQuotation(Request $request){
        $Quotation = new Quotation;
        $Quotation->enqueryId = $request->enqId;
        $Quotation->quotation = $request->emailBody;
        $Quotation->quotationLink = $request->enqueryId.'_'.Carbon::now()->format('Y-m-d H:i:s').'_'.Auth::user()->name;
        $Quotation->save();
        return back();
    }
    public function quotationPdf($quotationLink){
        $quotationLink = $quotationLink;
        $Quotation = Quotation::where('quotationLink',$quotationLink)->first();
        return view('admin/quatation_html')->with('quotation',$Quotation);
    }
}
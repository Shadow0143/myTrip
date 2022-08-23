<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\leadmasters;
use Mail;
use Illuminate\Support\Str;
class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }
    public function storeContactForm(Request $request){
        $var = Str::random(8);
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $leadmasters = new leadmasters;
        $leadmasters->enqueryId = $var;
        $leadmasters->customerName = $request->f_name.' '.$request->l_name;
        $leadmasters->email = $request->email;
        $leadmasters->contactNumber = $request->phone;
        $leadmasters->URL = $request->url;
        $leadmasters->message = $request->message;

        $leadmasters->save();
        return redirect()->back()->with(['message' => 'Contact Form Submit Successfully']);
    }
    public function getCallBack(Request $request){
        $var = Str::random(8);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        $leadmasters = new leadmasters;
        $leadmasters->enqueryId = $var;
        $leadmasters->customerName = $request->name;
        $leadmasters->email = $request->email;
        $leadmasters->contactNumber = $request->mobile;
        $leadmasters->URL = $request->url;
        $leadmasters->message = $request->message;
        $leadmasters->save();
        return redirect()->back()->with(['message' => 'Contact Form Submit Successfully']);
    }
}
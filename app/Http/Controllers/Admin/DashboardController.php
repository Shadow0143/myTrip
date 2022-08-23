<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\Subscriber;
class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        return view('admin/dashboard');
    }
    public function setting() {
        $setting = setting::all();
        return view('admin/setting')->with('data', $setting);
    }
    public function submit_setting(Request $request) {
        $logo = $request->file('logo')->store('public/images/upload');
        $favicon = $request->file('favicon')->store('public/images/upload');
        setting::where("id", 2)->update([
            'websiteName' => $request->websiteName,
            'websiteURL' => $request->websiteUrl,
            'email' => $request->email,
            'contactNumber' => $request->contactNumber,
            'contactNumber2' => $request->contactNumber,
            'address' => $request->address,
            'logo' => $logo,
            'title' => $request->title,
            'description' => $request->description,
            'favicon' => $favicon,
            'facebookLink' => $request->facebookLink,
            'twitterLink' => $request->twitterLink,
            'instagramLink' => $request->instagramLink,
            'linkedinLink' => $request->linkedinLink,
        ]);
        return back();
    }
    public function subscriberView(){
        $subscriber= Subscriber::orderBy('created_at', 'DESC')->get();
        return view('admin/subscriber-view')->with('subscriber',$subscriber);
    }
}
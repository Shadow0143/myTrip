<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leadmasters;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\package;
use Illuminate\Support\Carbon;
class LeadentryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function leadEntry() {
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 3){
            $Package = Package::whereNotNull('title')->get();
            return view('admin/lead-entry', compact('Package'));
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function leadEntrySave(Request $request) {
        $contactNumber = ($request->countryCode=='+91') ? $request->contactNumber1 : $request->contactNumber2;
        $var = Str::random(8);
        $leadmasters = new leadmasters;
        $leadmasters->enqueryId = $var;
        $leadmasters->leadType = $request->leadType;
        $leadmasters->customerName = $request->customerName;
        $leadmasters->email = $request->email;
        $leadmasters->contactNumber = $contactNumber;
        $leadmasters->countryCode = $request->countryCode;
        $leadmasters->address = $request->address;
        $leadmasters->noOfAdult = $request->noOfAdult;
        $leadmasters->childWithBed = $request->childWithBed;
        $leadmasters->childWithNoBed = $request->childWithNoBed;
        $leadmasters->totalChild = $request->totalChild;
        $leadmasters->noOfInfant = $request->noOfInfant;
        $leadmasters->totalPAX = $request->totalPAX;
        $leadmasters->destination = $request->destination;
        $leadmasters->jurneyDate = date('Y-m-d',strtotime(str_replace('/','-', $request->arrivalDate)));
        $leadmasters->departureDate =  date('Y-m-d',strtotime(str_replace('/','-', $request->departureDate)));
        $leadmasters->modeOfArrival = $request->modeOfArrival;
        $leadmasters->modeOfTravel = $request->modeOfTravel;
        $leadmasters->flight = $request->flightRequired;
        $leadmasters->categoryOfPkg = $request->categoryOfPkg;
        $leadmasters->hotelCategory = $request->hotelCategory;
        $leadmasters->foodPlan = $request->foodPlan;
        $leadmasters->totalTourBudget = $request->totalTourBudget;
        $leadmasters->durationOfStay = $request->durationOfStay;
        $leadmasters->additionalFacility = $request->additionalFacility;
        $leadmasters->remark = $request->remark;
        $leadmasters->TAT = date('Y-m-d',strtotime(str_replace('/','-', $request->TAT)))." ".$request->tatTime;
        $leadmasters->createdBy = Auth::user()->name;
        $leadmasters->updatedBy = Auth::user()->name;
        $leadmasters->save();
        return 1;
    }
}
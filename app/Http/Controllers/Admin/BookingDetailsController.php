<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\leadmasters;
use App\Models\Hotel;
use App\Models\Transportation;
use App\Models\supplemenet;
use App\Models\invoice;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\paymentDetails;
class BookingDetailsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function bookingDeatils() {
        return view('admin/booking-details')->with('data', []);;
    }
    public function fetchBookingDetails(Request $request) {
        $start = $request->start;
        $end = $request->end;
        $leadmasters = leadmasters::whereBetween('jurneyDate', [$start, $end])->where('status', 'Converted')->get();
        foreach($leadmasters as $lk => $lead){
            $paymentDetails = paymentDetails::where('enqueryId', $lead->enqueryId)->orderBy('created_at', 'desc')->take(1)->get();
            $leadmasters[$lk]['paymentDetails'] = $paymentDetails;
        }
        foreach($leadmasters as $lk => $lead){
            $invoice = invoice::where('enqueryId', $lead->enqueryId)->orderBy('created_at', 'desc')->take(1)->get();
            $leadmasters[$lk]['invoice'] = $invoice;
        }
        // dd($start);
        return view('admin/booking-details')->with('data', $leadmasters)->with('start',$start)->with('end',$end);
    }
    public function addHotel(Request $request) {
        $key =  $request->enqueryId;
        $data = Hotel::where('enqueryId', $key)->get();
        return view('admin/add-hotel')->with('data', $data);
    }
    public function addHotelSave(Request $request) {
        $hotel = new Hotel;
        $hotel->enqueryId = $request->enqueryId;
        $hotel->hotelName = $request->hotelName;
        $hotel->noOfRooms = $request->noOfRooms;
        $hotel->CWB = $request->cwb;
        $hotel->CNB = $request->cnb;
        $hotel->hotelLocation = $request->hotelLocation;
        $hotel->roomType = $request->roomType;
        $hotel->contactInfo = $request->contactInfo;
        $hotel->checkIn = $request->checkIn;
        $hotel->checkOut = $request->checkOut;
        $hotel->mealPlan = $request->mealPlan;
        $hotel->mealType = $request->mealType;
        $hotel->comment = $request->comment;
        $hotel->costPrice = $request->costPrice;
        $hotel->save();
        return back();
    }
    public function addTransportation(Request $request) {
        $key =  $request->enqueryId;
        $data = Transportation::where('enqueryId', $key)->get();
        return view('admin/add-transportation')->with('data', $data);
    }
    public function addTransportationSave(Request $request) {
        $transportation = new Transportation;
        $transportation->enqueryId = $request->enqueryId;
        $transportation->vehicaleType = $request->vehicaleType;
        $transportation->vehicaleName = $request->vehicaleName;
        $transportation->pickUpDate = $request->pickUpDate;
        $transportation->pickUpLocation = $request->pickUpLocation;
        $transportation->dropDate = $request->dropDate;
        $transportation->dropLocation = $request->dropLocation;
        $transportation->commnet = $request->commnet;
        $transportation->day = $request->day;
        $transportation->save();
        return back();
    }
    public function addSupplement(Request $request) {
        $key =  $request->enqueryId;
        $data = supplemenet::where('enqueryId', $key)->get();
        return view('admin/add-suppliment')->with('data', $data);
    }
    public function addSupplementSave(Request $request) {
        $supplemenet = new supplemenet;
        $supplemenet->enqueryId = $request->enqueryId;
        $supplemenet->details = $request->details;
        $supplemenet->dateOfService = $request->dateOfService;
        $supplemenet->location = $request->location;
        $supplemenet->save();
        return back();
    }
    public function addPaymentEmail(Request $request) {
        $key =  $request->id;
        $data = leadmasters::select('enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber')->where('id', $key)->get();
        return view('admin/gentle-payment-reminder')->with('data', $data)->with('success', 'Email Sent');
    }
    public function paymentReminder(Request $request) {
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
    public function sendInvoice(Request $request) {
        $key =  $request->enqueryId;
        $data = leadmasters::select('enqueryId', 'jurneyDate', 'customerName', 'email', 'contactNumber')->where('enqueryId', $key)->get();
        $hotel = Hotel::where('enqueryId', $key)->get();
        $transportation = Transportation::where('enqueryId', $key)->get();
        $supplemenet = supplemenet::where('enqueryId', $key)->get();
        $invoice = invoice::where('enqueryId', $key)->get();
        $html = '';
	    if(count($data) > 0){
            $html .= '<table border="1" cellpadding="1" cellspacing="1" style="width:746px">
                <tbody>
                    <tr>
                        <td colspan="2" style="text-align:center"><span style="color:#000000"><strong><span style="font-size:16px"><span style="font-family:tahoma,geneva,sans-serif">Meilleur Holidays|| Your Travel Partner</span></span></strong></span><br />
                            Corporate office: Merlin Villa, Room No: 3B, 88A Hazra Road. Kolkata, West Bengal, India- 700026<br />
                            Registered Office: Vaishnao Vatika, 57 Purbachal Main Road, Kolkata, West Begal, India 700078</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background-color:rgb(51, 51, 51); text-align:center"><span style="color:#FFFFFF"><strong><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Reservation Voucher</span></span></strong></span></td>
                    </tr>';
                    foreach($data as $data){
                        $html .= '<tr>
                            <td style="width:50%">
                                <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" style="background-color:rgb(153, 204, 255)"><strong><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Guest Names</span></span></strong></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">LEAD PAX</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$data->customerName.'</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">NO. OF ADULT</span></span></td>
                                            <td>'.$data->totalChild.'</td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">NO. OF CHILD</span></span></td>
                                            <td>'.$data->noOfAdult.'</td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">TOTAL PAX</span></span></td>
                                            <td>'.$data->totalPAX.'</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="width:50%">
                                <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" style="background-color:rgb(153, 204, 255)"><strong><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Trip Notes</span></span></strong></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Enquiry ID</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$data->enqueryId.'</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">TRIP START DATE</span></span></td>
                                            <td>'.$data->jurneyDate.'</td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">TRIP END DATE</span></span></td>
                                            <td>'.$data->jurneyDate.'</td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">DURATION</span></span></td>
                                            <td>'.$data->durationOfStay.'</td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">FILE INCHARGE | NAME &amp; NO.</span></span></td>
                                            <td>'.$data->customerName.'</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>';
                    }
                    $html .= '<tr>
                        <td colspan="2">
                            <table style="width:100%">
                                <tbody>
                                    <tr>
                                        <td style="background-color:rgb(153, 204, 255)"><strong><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">ITINERARY</span></span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Location</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>HotelName</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>NR</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>CWB</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>CNB</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>ContactInfo</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>RoomType</strong></span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Meal</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>MealType</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Check in</strong></span></span></td>
                                        <td><span style="font-size:11px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Check out</strong></span></span></td>
                                    </tr>';
                                    foreach($hotel as $hotel){
                                        $html.='<tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->hotelLocation.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->hotelName.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->noOfRooms.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->CWB.'</span></span></td>
                                            <td>&nbsp;</td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->CNB.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->contactInfo.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->roomType.'</span></span></td>
                                            <td>&nbsp;</td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->mealPlan.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$hotel->mealType.'</span></span></td>
                                        </tr>';
                                    }
                                $html.='</tbody>
                            </table>
                            <table style="width:100%">
                                <tbody>
                                    <tr>
                                        <td style="background-color:rgb(153, 204, 255)"><strong><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">TRANSPORTATION</span></span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Start Date</strong></span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>End Date</strong></span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Pickup Point</strong></span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Drop Point</strong> </span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Transport Type </strong> </span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Vehicle Name</strong></span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Note</strong></span></span></td>
                                    </tr>';
                                    foreach($transportation as $transportation){
                                        $html.='<tr>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$transportation->pickUpDate.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$transportation->dropDate.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$transportation->noOfRooms.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$transportation->CWB.'</span></span></td>
                                            <td>&nbsp;</td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$transportation->CNB.'</span></span></td>
                                            <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$transportation->contactInfo.'</span></span></td>
                                        </tr>';
                                    }
                                $html.='</tbody>
                            </table>            
                            <table style="width:100%">
                                <tbody>
                                    <tr>
                                        <td style="background-color:rgb(153, 204, 255)"><strong><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">SUPPLEMENTS</span></span></strong></td>
                                    </tr>
                                </tbody>
                            </table>            
                            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Details</strong></span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Date of Service</strong></span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Location</strong></span></span></td>
                                    </tr>';
                                    foreach($supplemenet as $supplemenet){
                                        $html.='<tr>
                                                    <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$supplemenet->details.'</span></span></td>
                                                    <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$supplemenet->dateOfService.'</span></span></td>
                                                    <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">'.$supplemenet->location.'</span></span></td>
                                                </tr>';
                                    }
                                $html.='</tbody>
                            </table>            
                            <table style="width:100%">
                                <tbody>
                                    <tr>
                                        <td style="background-color:rgb(153, 204, 255)"><strong><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">EMERGENCY CONTACT OF Meilleur Holidays TEAM</span></span></strong></td>
                                    </tr>
                                </tbody>
                            </table>            
                            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Sr. No</span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Name</span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Level</span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Contact No</span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Email ID</span></span></td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">1</span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">CALL CENTER Ex</span></span></td>
                                        <td>1</td>
                                        <td>91 9836117777</td>
                                        <td>info@meilleurholidays.com</td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">2</span></span></td>
                                        <td><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Operations</span></span></td>
                                        <td>2</td>
                                        <td>91-8334864400</td>
                                        <td>meilleurholidays@Gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>';
    	}
        return view('admin/send-invoice-booking-details')->with('data', $data)->with('newhtml', $html)->with('invoice', $invoice);
    }
    public function saveInvoice(Request $request){
       
        $invoice = new invoice;
        $invoice->enqueryId = $request->enqueryId;
        $invoice->invoice = $request->templateBody;
        $invoice->invoiceLink = $request->enqueryId.'_'.Carbon::now()->format('Y-m-d H:i:s').'_'.Auth::user()->name;
        $invoice->save();
        return back();
    }
    public function gentleReminder(Request $request){
        $key =  $request->enqueryId;
        $data = leadmasters::select('enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber')->where('enqueryId', $key)->get();
        return view('admin/gentle-payment-reminder')->with('data', $data);
    }
    public function finalReminder(Request $request){
        $key =  $request->enqueryId;
        $data = leadmasters::select('enqueryID', 'jurneyDate', 'customerName', 'email', 'contactNumber')->where('enqueryId', $key)->get();
        return view('admin/final-payment-reminder')->with('data', $data);
    }
}
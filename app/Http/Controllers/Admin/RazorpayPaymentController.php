<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Exception;
use Illuminate\Support\Facades\Session;
class RazorpayPaymentController extends Controller
{
    public function index() {        
        return view('razorpayView');
    }
    public function store(Request $request) {
        $data = $request->all();
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));  
        $payment = $api->payment->fetch($data['razorpay_payment_id']);
        $data['payment'] = $payment;
        if(count($data)  && !empty($data['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($data['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                $data['responce'] = $response;
                Session::put('success', 'Payment successful');
            } catch (Exception $e) {
                Session::put('error',$e->getMessage());                
            }
        }
        return redirect('razorpay-payment');
    }
    public function paymentOrderSave(Request $request) {
        $data1=[
            'name' => $request->name,
            'email' => $request->email,
            'contactNumber' => $request->contactNumber,
            'address' => $request->address,
            'amount' => $request->amount,
            'pmode' => $request->pmode
        ];
        $data = (object) $data1;
        Session::put('razorpayData', $data);
        return redirect('/payment/CreateOrder');
    }
    public function paymentCreateOrder() {
        $data = Session::get("razorpayData");
        return view('razorpayPaymentView')->with('data',$data);
    }
}
<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function basic_email(Request $request) {
        $data =[
            'subject'=>$request-> get('subject'),
            'to'=>$request-> get('toEmail'),
            'body'=>$request-> get('emailBody'),
        ];
        Mail::send(['html'=>'admin.mailTemplate'], $data, function($message) {
            $message->to('$toEmail');
            $message->subject('Laravel Basic Testing Mail');
            $message->from('akhil.bluehorse@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
}
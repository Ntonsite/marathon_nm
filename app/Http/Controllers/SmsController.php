<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keenops\LaravelSms\LaravelSms;

class SmsController extends Controller
{
    public function send_approval($to){
        $message = "Your Request for Loan has been Approved";
        
        $to = [$to]; 
        
        return LaravelSms::send($message, $to);
    }
}

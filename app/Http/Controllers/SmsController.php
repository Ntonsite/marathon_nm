<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keenops\LaravelSms\LaravelSms;

class SmsController extends Controller
{
    public function send_approval($to, $name, $status){
        $message = "Good day {$name} Your Request for Loan has been {$status}";
        
        $to = [$to]; 
        
        return LaravelSms::send($message, $to);
    }
}

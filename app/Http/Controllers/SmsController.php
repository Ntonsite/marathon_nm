<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keenops\LaravelSms\LaravelSms;

class SmsController extends Controller
{
    public function index(){
        $message = "A Beem Challenge is working fine now LOML, yours Tesoro";
        
        $to = ['+255674391905','0768505988']; 
        
        return LaravelSms::send($message, $to);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keenops\LaravelSms\LaravelSms;

class SmsController extends Controller
{
    public function index(){
        $message = "Test a service if it is working";
        
        $to = ['0714377516']; 
        
        return LaravelSms::send($message, $to);
    }
}

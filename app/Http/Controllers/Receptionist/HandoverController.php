<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Payment;
use DB;
use Auth;

class HandoverController extends Controller
{
    //

     public function dailySalesReport(){

    	$payments = Payment::
    				where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
    				->where('receptionist_id',Auth::guard('receptionist')->user()->id)->get();
        return view('receptionist/report.daily', compact('payments'));

    }

    public function summarySalesReport(){
    	 $todayDate = date("Y-m-d");

    	 // session
    	   $session = DB::table("payments")
                ->where("subscription_id", 2)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->where('receptionist_id',Auth::guard('receptionist')->user()->id)
                ->count();
            $sessionAmount = DB::table('subscriptions')->where('id',2)
                ->value("amount");
            $cashSession = $session * $sessionAmount;


            // month
    	   $month = DB::table("payments")
                ->where("subscription_id", 3)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->where('receptionist_id',Auth::guard('receptionist')->user()->id)
                ->count();
            $monthAmount = DB::table('subscriptions')->where('id',3)
                ->value("amount");
            $cashMonth = $month * $sessionAmount;

            //3 month

            $threemonth = DB::table("payments")
                ->where("subscription_id", 4)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->where('receptionist_id',Auth::guard('receptionist')->user()->id)
                ->count();
            $threemonthAmount = DB::table('subscriptions')->where('id',4)
                ->value("amount");
            $cashthreeMonth = $threemonth * $threemonthAmount;

            //6 month

            $sexmonth = DB::table("payments")
                ->where("subscription_id", 5)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->where('receptionist_id',Auth::guard('receptionist')->user()->id)
                ->count();
            $sexmonthAmount = DB::table('subscriptions')->where('id',5)
                ->value("amount");
            $cashsexMonth = $sexmonth * $sexmonthAmount;


              //12 month

            $twelvemonth = DB::table("payments")
                ->where("subscription_id", 6)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->where('receptionist_id',Auth::guard('receptionist')->user()->id)
                ->count();
            $twelvemonthAmount = DB::table('subscriptions')->where('id',6)
                ->value("amount");
            $cashtwelveMonth = $twelvemonth * $twelvemonthAmount;

            


        return view('receptionist/report.summary',compact('todayDate','cashSession','cashMonth','cashthreeMonth','cashsexMonth','cashtwelveMonth'));

    }
}

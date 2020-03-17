<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Payment;
use DB;

class managerReportController extends Controller
{
    //
     public function dailySalesReport(){

    	$payments = Payment::
    				where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
    				->get();
        return view('manager/report.daily', compact('payments'));

    }

    public function summarySalesReport(){
    	 $todayDate = date("Y-m-d");

    	 // session
    	   $session = DB::table("payments")
                ->where("subscription_id", 2)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->count();
            $sessionAmount = DB::table('subscriptions')->where('id',2)
                ->value("amount");
            $cashSession = $session * $sessionAmount;


            // month
    	   $month = DB::table("payments")
                ->where("subscription_id", 3)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->count();
            $monthAmount = DB::table('subscriptions')->where('id',3)
                ->value("amount");
            $cashMonth = $month * $sessionAmount;

            //3 month

            $threemonth = DB::table("payments")
                ->where("subscription_id", 4)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->count();
            $threemonthAmount = DB::table('subscriptions')->where('id',4)
                ->value("amount");
            $cashthreeMonth = $threemonth * $threemonthAmount;

            //6 month

            $sexmonth = DB::table("payments")
                ->where("subscription_id", 5)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->count();
            $sexmonthAmount = DB::table('subscriptions')->where('id',5)
                ->value("amount");
            $cashsexMonth = $sexmonth * $sexmonthAmount;


              //12 month

            $twelvemonth = DB::table("payments")
                ->where("subscription_id", 6)
                ->where('created_at', '>=', date('Y-m-d'). ' 00:00:00')
                ->count();
            $twelvemonthAmount = DB::table('subscriptions')->where('id',6)
                ->value("amount");
            $cashtwelveMonth = $twelvemonth * $twelvemonthAmount;

            


        return view('manager/report.summary',compact('todayDate','cashSession','cashMonth','cashthreeMonth','cashsexMonth','cashtwelveMonth'));

    }


     public function betweenDateSalesReport(Request $request){
    	 $from = $request->get('from');
        $to = $request->get('to');
        $todayDate = date("Y-m-d");

    	 // session
    	   $session = DB::table("payments")
                ->where("subscription_id", 2)
                ->whereBetween('created_at', [$from. ' 00:00:00', $to. ' 00:00:00'])
                ->count();
            $sessionAmount = DB::table('subscriptions')->where('id',2)
                ->value("amount");
            $cashSession = $session * $sessionAmount;


            // month
    	   $month = DB::table("payments")
                ->where("subscription_id", 3)
                ->whereBetween('created_at', [$from. ' 00:00:00', $to. ' 00:00:00'])
                ->count();
            $monthAmount = DB::table('subscriptions')->where('id',3)
                ->value("amount");
            $cashMonth = $month * $sessionAmount;

            //3 month

            $threemonth = DB::table("payments")
                ->where("subscription_id", 4)
                ->whereBetween('created_at', [$from. ' 00:00:00', $to. ' 00:00:00'])
                ->count();
            $threemonthAmount = DB::table('subscriptions')->where('id',4)
                ->value("amount");
            $cashthreeMonth = $threemonth * $threemonthAmount;

            //6 month

            $sexmonth = DB::table("payments")
                ->where("subscription_id", 5)
                ->whereBetween('created_at', [$from. ' 00:00:00', $to. ' 00:00:00'])
                ->count();
            $sexmonthAmount = DB::table('subscriptions')->where('id',5)
                ->value("amount");
            $cashsexMonth = $sexmonth * $sexmonthAmount;


              //12 month

            $twelvemonth = DB::table("payments")
                ->where("subscription_id", 6)
                ->whereBetween('created_at', [$from. ' 00:00:00', $to. ' 00:00:00'])
                ->count();
            $twelvemonthAmount = DB::table('subscriptions')->where('id',6)
                ->value("amount");
            $cashtwelveMonth = $twelvemonth * $twelvemonthAmount;

            


        return view('manager/report.summary',compact('todayDate','cashSession','cashMonth','cashthreeMonth','cashsexMonth','cashtwelveMonth'));

    }


    

}

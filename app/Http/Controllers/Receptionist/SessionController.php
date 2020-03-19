<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use App\Customer;
use App\Payment;
use App\Attendance;
use DB;
use Auth;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
  public function index()
    {
        //
        $sessions = Payment::where('amount',5000)->where('receptionist_id', Auth::guard('receptionist')->user()->id)->where('expirydate',date('Y-m-d'))->get();
        return view('receptionist/session.index', compact('sessions'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('receptionist/session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'phone'=>'required',

        ]);

            $customer=$request->input('phone');
        Customer::create([
              
                'phone'      =>$customer,

                'corporate_id'=> DB::table('corporates')->where('names','self')->value('id'),
                'names'=> 'session',
                'phone'      =>$customer,              
                'cardCode'=> str_random(15),
                'type'=> 'session',
            
            ]);

            Payment::create([
                'customer_id'=> DB::table('customers')->where('phone',$customer)->value('id'),
                'receptionist_id'=> Auth::guard('receptionist')->user()->id,
                'subscription_id'=> DB::table('subscriptions')->where('name','day')->value('id'),
                'expirydate'=> date('Y-m-d'),
                'amount'=>  DB::table('subscriptions')->where('name','day')->value('amount'),
        ]);
        $mytime = date('Y-m-d H:i:s');
        $customer_id=DB::table('customers')->where('phone',$customer)->value('id');


        Attendance::create([
            'payment_id'       =>DB::table('payments')->where('customer_id',$customer_id)
                                     ->value('id') ,
            'receptionist_id'     => Auth::guard('receptionist')->user()->id,
            
        ]);
        return redirect()->route('session.index')->with('info','corporate Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    
}

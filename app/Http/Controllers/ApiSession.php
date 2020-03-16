<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Customer;
use App\Payment; 
use App\Control;
use App\Receptionist;
use App\Session;
use App\Http\Resources\PaymentResource;
use DB;
use Illuminate\Support\Facades\Input; 
use App\Http\Requests\RegisterAuthRequest;
use Response;

class ApiSession extends Controller
{
    //
    public function session(){
    $customer=Input::get('phone');
    // $category=Input::get('category_id');
    // $sport=Input::get('sport_id');
    // $membership=Input::get('membership_id');
       $receptionist_id=Input::get('receptionist_id');
       

        $todayDate = date("Y-m-d");
        $i=1;
        $client=DB::table('customers')->where('phone',$customer)->value('phone');
        if(!$client){
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
                'receptionist_id'=> DB::table('receptionists')->where('id',$receptionist_id)->value('name'),
                'subscription_id'=> DB::table('subscriptions')->where('name','day')->value('id'),
                'expirydate'=> date('Y-m-d'),
                'amount'=>  DB::table('subscriptions')->where('name','day')->value('amount'),
        ]);
        $mytime = date('Y-m-d H:i:s');
        $customer_id=DB::table('customers')->where('phone',$customer)->value('id');


        Attendance::create([
            'payment_id'       =>DB::table('payments')->where('customer_id',$customer_id)
                                     ->value('id') ,
            'receptionist_id'     => $receptionist_id,
            
        ]);
               $payment = Payment::where('id', DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'))->first();

            
                  return response()
                ->json(
                    
                      
                       [
                            'amount' => DB::table('subscriptions')->where('name','day')->value('amount'),
                            'telephone' => $customer,
                            'ticket number'=> DB::table('attendances')->count()
                        
                    ]
                );
    

        }

         Payment::create([
                'customer_id'=> DB::table('customers')->where('phone',$customer)->value('id'),
                'receptionist_id'=> DB::table('receptionists')->where('id',$receptionist_id)->value('name'),
                'subscription_id'=> DB::table('subscriptions')->where('name','day')->value('id'),
                'expirydate'=> date('Y-m-d'),
                'amount'=>  DB::table('subscriptions')->where('name','day')->value('amount'),
        ]);

        $mytime = date('Y-m-d H:i:s');
        $customer_id=DB::table('customers')->where('phone',$customer)->value('id');

        Attendance::create([
            'payment_id'       =>DB::table('payments')->where('customer_id',$customer_id)
                                     ->value('id') ,
            'receptionist_id'     => $receptionist_id,
            
        ]);


    
             
               $payment = Payment::where('id', DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'))->first();

            
                  return response()
                ->json(
                    [
                      
                      
                            'amount' => DB::table('subscriptions')->where('name','day')->value('amount'),
                            'telephone' => $customer,
                            'ticket number'=> DB::table('attendances')->count()
                        
                    ]
                );
    
}
}


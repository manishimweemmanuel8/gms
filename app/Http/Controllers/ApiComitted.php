<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use DB;
use App\Attendance;

class ApiComitted extends Controller
{

   

   public function committedCustomer(){
   $card_code=Input::get('card_code');
   $payment=DB::table('customers')->where('cardCode',$card_code)->value('id');
   $receptionist_id=Input::get('receptionist_id');
   if ($payment) {
       # code...

       // $entitie_id=DB::table('customers')->where('id', $payment)
       //              ->value("entitie_id");


            $todayDate = date("Y-m-d");
            $payment_id = DB::table('payments')
                    ->where('customer_id', $payment)
                    ->where('expirydate', '>=', $todayDate)->value('id');
                    

                    if($payment_id){


                    $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('payment_id', $payment_id)
                    ->value("id");

                if ($attend) {
                    return response()
                ->json(
                    [
                      
                      
                            // 'category' => $payment->categorie->name,
                         //    'membership' => $payment->membership->name,
                            'names' => DB::table('customers')->where('id',$payment)->value('names'),
                            'expiration date' =>DB::table('payments')->where('customer_id',$payment)->value('expirydate'),
                            'message'=> 'you are already attended'
                  
                        
                    ]
                );
                } else{
                    Attendance::create([
                         'payment_id'       =>DB::table('payments')->where('customer_id',$payment)
                                     ->value('id') ,
                 			'receptionist_id'     => $receptionist_id,
                    ]);
                   

               // $data['customer_id']="client pass";
               

            
                  return response()
                ->json(
                    [
                      
                      
                            'names' => DB::table('customers')->where('id',$payment)->value('names'),
                            'expiration date' =>DB::table('payments')->where('customer_id',$payment)->value('expirydate'),
                            'message'=> 'you allow to attend',
                            'ticket number'=> DB::table('attendances')->count()

                  
                        
                    ]
                );
                                            
                }
            }
            else{
            
                 return response()
                ->json(
                    [
                      
                      
                           'names' => DB::table('customers')->where('id',$payment)->value('names'),
                            'expiration date' =>DB::table('payments')->where('customer_id',$payment)->value('expirydate'),
                            'message'=> 'your subscription was done'
                  
                        
                    ]
                );


                }

                    
   }else{
      // $data['customer_id']="Invalid card_code on committed";
      return response()->json(['message'=> 'Invalid card_code on committed']);
    
   }

   
}
}
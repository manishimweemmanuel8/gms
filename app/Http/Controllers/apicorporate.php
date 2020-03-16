<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use DB;
use App\CorporateAttendance;

class apicorporate extends Controller
{
    //
    public function corporateCustomer(){
   $card_code=Input::get('card_code');
   $customer_id=DB::table('customers')->where('cardCode',$card_code)->value('id');
   if ($customer_id) {
       # code...

       // $entitie_id=DB::table('customers')->where('id', $payment)
       //              ->value("entitie_id");

   	$corporate_id=DB::table('customers')->where('id', $customer_id)
                    ->value("corporate_id");
       // $sport_id = DB::table('payments')->where('customer_id', $entitie_id)->value("sport_id");


       //      $todayDate = date("Y-m-d");
       //      $client = DB::table('payments')->where('customer_id', $entitie_id)
       //              ->where('expiry_date', '>=', $todayDate)
                    ;


            $todayDate = date("Y-m-d");
            $payment_id = DB::table('payment_corporates')
                    ->where('corporate_id', $corporate_id)
                    ->where('expirydate', '>=', $todayDate)->value('id');
                    

                    if($payment_id){


                    $attend = DB::table('corporate_attendances')
                    ->where('created_at', $todayDate)
                    ->where('paymentcorporate_id', $customer_id)
                    ->value("id");

                if ($attend) {
                    return response()
                ->json(
                    [
                      
                      
                            // 'category' => $payment->categorie->name,
                         //    'membership' => $payment->membership->name,
                            'names' => DB::table('customers')->where('id',$customer_id)->value('names'),
                            'expiration date' =>DB::table('payment_corporates')->where('corporate_id',$corporate_id)->value('expirydate'),
                            'company' =>DB::table('corporates')->where('id',$corporate_id)->value("names"),
                            'message'=> 'you are already attended'
                  
                        
                    ]
                );
                } else{

                    CorporateAttendance::create([
                         'paymentcorporate_id'       =>$customer_id,
                 		  'receptionist_id'     => 1,
                    ]);
                   

               // $data['customer_id']="client pass";
               

            
                  return response()
                ->json(
                    [
                      
                      
                             'names' => DB::table('customers')->where('id',$customer_id)->value('names'),
                            'expiration date' =>DB::table('payment_corporates')->where('corporate_id',$corporate_id)->value('expirydate'),
                            'company' =>DB::table('corporates')->where('id',$corporate_id)->value("names"),
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
                      
                      
                            'names' => DB::table('customers')->where('id',$customer_id)->value('names'),
                            'expiration date' =>DB::table('payment_corporates')->where('customer_id',$payment)->value('expirydate'),
                            'company' =>DB::table('corporates')->where('id',$corporate_id)->value("names"),
                            'message'=> 'your subscription was done'
                  
                        
                    ]
                );


                }

                    
   }else{
      // $data['customer_id']="Invalid card_code on committed";
      return response()->json(['message'=> 'Invalid card_code on company']);
    
   }

   
}
}

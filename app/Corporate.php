<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use App\Payment;
use App\PaymentCorporate;


class Corporate extends Model
{
    //
    protected $fillable = ['name','email','representative'];
    use SoftDeletes;

    public function customer(){
		return $this->hasOne(Customer::class);
	}
	

    public function payment(){
    	return $this->hasOne(Payment::class,'id','customer_id');
    } 

    public function paymentCorporate(){
    	return $this->belongsTo(PaymentCorporate::class);
    } 
}


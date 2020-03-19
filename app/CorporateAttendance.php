<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;
use App\Customer;

class CorporateAttendance extends Model
{
    //
    protected $fillable = ['paymentcorporate_id','receptionist_id'];
    use SoftDeletes;

    public function payment(){
    	return $this->belongsTo(Payment::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}

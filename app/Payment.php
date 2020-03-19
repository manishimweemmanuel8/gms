<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Receptionist;
use App\Customer;
use App\Corporate;
use App\Attendance;


class Payment extends Model
{
    //
    protected $fillable = ['customer_id','receptionist_id','subscription_id','expirydate','amount'];
    use SoftDeletes; 

     public function customer(){
    	return $this->belongsTo(Customer::class);
    }

    public function corporate(){
        return $this->belongsTo(Corporate::class,'customer_id','id');
    }


    public function receptionist(){
    	return $this->belongsTo(Receptionist::class);
    }

    public function attendance(){
        return $this->hasOne(Attendance::class);
    }
}

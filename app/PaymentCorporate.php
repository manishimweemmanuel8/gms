<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Receptionist;
use App\Customer;
use App\Corporate;
use App\CorporateAttendance;


class PaymentCorporate extends Model
{
    //
    protected $fillable = ['corporate_id','month','amount','expirydate'];
    use SoftDeletes; 

    public function customer(){
    	return $this->belongsTo(Customer::class);
    }

    public function corporate(){
        return $this->hasOne(Corporate::class);
    }

    public function receptionist(){
    	return $this->belongsTo(Receptionist::class);
    }

    public function corporateAttendance(){
        return $this->hasOne(CorporateAttendance::class);
    }

}

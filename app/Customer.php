<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
use App\Corporate;
use App\Payment;
use App\Attendance;
use App\CorporateAttendance;


class Customer extends Model
{
    //
     protected $fillable = ['names','cardCode','phone','corporate_id','type'];
    use SoftDeletes;


 	public function corporate(){
    	return $this->belongsTo(Corporate::class);
    }
    
    public function payment(){
    	return $this->hasOne(Payment::class);
    } 

    public function attendance(){
        return $this->hasOne(Attendance::class);
    }

    public function attendanceCompany(){
        return $this->hasOne(CorporateAttendance::class);
    }

    public static function insertData($data){

      $value=DB::table('customers')->where('phone', $data['phone'])->get();
      if($value->count() == 0){
         DB::table('customers')->insert($data);
      }
   }
}

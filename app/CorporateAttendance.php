<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CorporateAttendance extends Model
{
    //
     //
     protected $fillable = ['paymentcorporate_id','receptionist_id'];

    use SoftDeletes;
}

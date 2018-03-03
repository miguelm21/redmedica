<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalCenter extends Model
{
   protected $fillable = [

    'id_medicalCenter',
    'tradename',
    'activePlan',
    'emailAdmin',
    'nameAdmin',
    'phone',
    'city',
    'billingData',
    'meansOfRecords',
    'id_promoter'
   ];

}

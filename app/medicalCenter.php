<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalCenter extends Model
{


              protected $fillable = [
                'idMedicalCenter',
                'tradename',
                'activePlan',
                'emailAdmin',
                'nameAdmin',
                'phone',
                'city',
                'billingData',
                'meansOfRecords',
                'numberPromoter',
              ];
}

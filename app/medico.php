<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    protected $fillable = [
      'identification',
      'name',
      'lastName',
      'gender',
      'email',
      'password',
      'city',
      'medicalCenter_id',
      'phone',
      'facebook',
      'id_promoter',
      'state',
      'showNumber',
      'phoneOffice1',
       'phoneOffice2',

    ];

    public function medico_specialty(){
       return $this->hasMany('App\medico_specialty');
    }

    public function specialty(){
       return $this->belongsTo('App\specialty');
    }

    // public function medical_center(){
    //    return $this->hasOne('App\medicalCenter');
    // }



}

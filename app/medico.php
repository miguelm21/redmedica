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
      'state',
      'specialty_id',
      'sub-specialty_id',
      'medicalCenter_id',
      'phone',
      'facebook',

    ];

    public function specialty(){
       return $this->belongsTo('App\specialty');
    }

    public function medicalCenter(){
       return $this->hasOne('App\medicalCenter');
    }



}

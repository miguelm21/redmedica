<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assistant extends Model
{

  protected $fillable = [
    'name',
    'medico_id',
    'status',
    'modules_id',
    'phone1',
    'phone2',
    'email',
    'dateActivation',
  ];

  public function medico(){
     return $this->belongsTo('App\medico');
  }

}

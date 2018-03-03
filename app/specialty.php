<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialty extends Model
{
  protected $fillable = [
      'name', 'description','specialtyCategories_id'
  ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Session;

class Category extends Model
{
    protected $fillable = [

      'department', 'year', 'semester'

  ];
}

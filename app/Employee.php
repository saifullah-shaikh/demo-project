<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    
    protected $PrimaryKey = 'id';
    public $timestamps = false;
   protected $fillable = ['name','address','country','city','gender','profession'];
  
  
}

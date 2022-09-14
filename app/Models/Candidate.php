<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Candidate extends Model
{
    public $fillable = ['name', 'age', 'gender','phone', 'address', 'email','post'];
   
}

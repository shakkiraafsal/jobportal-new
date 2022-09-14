<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $fillable = ['fromdate', 'todate', 'duration', 'empname', 'desig', 'specialisation','fromdate1', 'todate1', 'duration1', 'empname1', 'desig1', 'specialisation1','fromdate2', 'todate2', 'duration2', 'empname2', 'desig2', 'specialisation2','fromdate3', 'todate3', 'duration3', 'empname3', 'desig3', 'specialisation3'];
}

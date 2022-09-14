<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    public $fillable = ['phd','phdsubject','phdboard ','phdyear','pg','pgsubject', 'pginstitute','pgboard ','pgyear','pgpercent','ug','ugsubject', 'uginstitute','ugboard ','ugyear','ugpercent','user_id'];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrievanceController extends Controller
{
 public function getGrievance()
    {
        return view('helpdesk.grievance_form');
    }
}

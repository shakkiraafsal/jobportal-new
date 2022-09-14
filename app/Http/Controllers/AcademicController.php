<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Academic;
use Illuminate\Support\Facades\Auth;

class AcademicController extends Controller
{
    public function create()
    {
        return view('admin.academicdetails');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'phd'=>'max:255',
           // 'phdboard' => 'max:500',
          
            'pg' => 'max:255',
           // 'pgsubject' => 'max:255',
            //'pginstitute' => 'max:500',
            //'pgboard' => 'max:500',
            
           // 'pgpercent' => 'max:255',
            'ug' => 'max:255',
            //'ugsubject' => 'max:255',
           // 'uginstitute' => 'max:250',
          //  'ugboard' => 'max:50',
          
           // 'ugpercent' => 'max:255',
       ]);
       

        $academic = new Academic();
        $academic->user_id = Auth::user()->id;
        $academic->phd = $request['phd'];
        $academic->phdsubject = $request['phdsubject'];
        $academic->phdboard = $request['phdboard'];
        $academic->phdyear = $request['phdyear'];
        $academic->pgsubject = $request['pgsubject'];
        $academic->pg = $request['pg'];
        $academic->pginstitute = $request['pginstitute'];
        $academic->pgboard = $request['pgboard'];
        $academic->pgyear = $request['pgyear'];
        $academic->pgpercent = $request['pgpercent'];
        $academic->ug = $request['ug'];
        $academic->ugsubject = $request['ugsubject'];
        $academic->uginstitute = $request['uginstitute'];
        $academic->ugboard = $request['ugboard'];
        $academic->ugyear = $request['ugyear'];
        $academic->ugpercent = $request['ugpercent'];
        $academic->ug = $request['others'];
        $academic->ugsubject = $request['subject'];
        $academic->uginstitute = $request['institute'];
        $academic->ugboard = $request['board'];
        $academic->ugyear = $request['year'];
        $academic->ugpercent = $request['percent'];
       
        
       $academic->save();

        return redirect()->route('Experience.create');
    }
}

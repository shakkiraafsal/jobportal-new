<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Experience;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function create()
    {
        return view('frontend.auth.experience');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([


            'empname' => 'max:255',
            'desig' => 'max:255',
            'specialisation' => 'max:255',
             'duration'=>'max:255',
            'empname1' => 'max:255',
            'desig1' => 'max:255',
            'specialisation1' => 'max:255',
          // 'duration1'=>'numeric',
            'empname2' => 'max:255',
            'desig2' => 'max:255',
            'specialisation2' => 'max:255',
         //  'duration2'=>'numeric',
            'empname3' => 'max:255',
            'desig3' => 'max:255',
            'specialisation3' => 'max:255',
           // 'duration3'=>'numeric',

        ]);






        $exp = Experience::create($input);
        $exp->user_id = Auth::user()->id;

        $exp->fromdate = $request['fromdate'];
        $exp->todate = $request['todate'];
        $exp->duration = $request['duration'];
        $exp->empname = $request['empname'];
        $exp->desig = $request['desig'];
        $exp->specialisation = $request['specialisation'];
        $exp->fromdate1 = $request['fromdate1'];
        $exp->todate1 = $request['todate1'];
        $exp->duration1 = $request['duration1'];
        $exp->empname1 = $request['empname1'];
        $exp->desig1 = $request['desig1'];
        $exp->specialisation1 = $request['specialisation1'];
        $exp->fromdate2 = $request['fromdate2'];
        $exp->todate2 = $request['todate2'];
        $exp->duration2 = $request['duration2'];
        $exp->empname2 = $request['empname2'];
        $exp->desig2 = $request['desig2'];
        $exp->specialisation2 = $request['specialisation2'];
        $exp->fromdate3 = $request['fromdate3'];
        $exp->todate3 = $request['todate3'];
        $exp->duration3 = $request['duration3'];
        $exp->empname3 = $request['empname3'];
        $exp->desig3 = $request['desig3'];
        $exp->specialisation3 = $request['specialisation3'];



        $exp->save();

        return redirect()->route('File.create');
        // return back()->with('success','Successfully entered the information!');

    }
}

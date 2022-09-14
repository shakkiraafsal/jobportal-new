<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CEandAcademicController extends Controller
{
    public function getCE()
    {
        return view("CE_and_Academic_Activites.CE");
    }
    public function postCE(Request $request)
    {        
        $request->validate([
            'enrollmentnumber'=>'required|max:10',
        ]);
        
        return back()->with('error','Invalid Enrollment Number');
    }

    public function getAcademic()
    {
        return view("CE_and_Academic_Activites.Academic_activities");
    }
    public function postAcademic(Request $request)
    {
        $request->validate([
            'enrollmentnumber'=>'required|max:10',
        ]);
        
        return back()->with('error','Invalid Enrollment Number');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Candidate;
use Illuminate\Support\Facades\Auth;

class personalController extends Controller
{
    public function create()
    {
        return view('admin.personaldetails');
    }

    public function store(Request $request)
    {
        $input = $request->all(); 
      

        $request->validate([
            'name' => 'required|max:255',
            
            'age' => 'required|date',
            'gender' => 'required',
            'phone' => 'required|min:10|numeric',
            'address' => 'required|max:255',
            'post'=>'required|max:150',
            'email' => 'required|email|max:255',
            'user_id'=>'required'
        ]);

        $candidate = Candidate::create($input);
        $candidate->user_id = $request['user_id'];
        $candidate->post = $request['post'];
        $candidate->save();
        
 
        //Candidate::create($input);
        return redirect()->route('Academic.create');

        // return back()->with('success','Successfully entered the information!');

    }
}

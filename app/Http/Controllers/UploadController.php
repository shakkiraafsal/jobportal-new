<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function create()
    {
        return view('admin.docupload');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'files' => 'required',
            'files.*' => 'mimes:csv,txt,xlx,xls,pdf,docx,odt,jpg,jpeg,png'
        ]);

        
           $candidate = Candidate::where('user_id', Auth::user()->id)->firstOrFail();
      
        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $key => $file) {

                $name =  $candidate->name  . '.' . $file->extension();
                $path = 'public/files/' . $name;
                Storage::put($path, file_get_contents($file));


                $insert[$key]['store_path'] = $path;
                $insert[$key]['user_id'] = Auth::user()->id;
                $ref = 'app_id' . date('dmY') . '-' . Auth::user()->id;
                $insert[$key]['application_id'] = $ref;
            }
        }
        File::insert($insert);
        $file=File::where('user_id', Auth::user()->id)->firstOrFail();
                
         
       

        return redirect()->route('download')->with(['success' => 'Application submitted successfully with application no.' . ' ' .$ref]);
    }
}

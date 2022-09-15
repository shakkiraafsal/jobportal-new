<?php


namespace App\Http\Controllers;
use Validator;
use Carbon\Carbon;
use App\Models\User;
use  App\Models\File;
use  App\Models\Payment;
use App\Models\Academic;
use  App\Models\Candidate;
use App\Rules\paymentRules;
use App\Models\Experience;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{

    public function getLogin()
    {
        return view('frontend.auth.userlogin');
    }
    public function postAdminLogin(Request $request)
    {
        $status = Auth::attempt(['email' => $request['email'], 'password' => $request['password']]);

       if ($status &&  Auth::user()->candidate && Auth::user()->candidate->application_id)  {
           return redirect()->route('download');
       }
       
       elseif($status){
          
            return redirect()->route('Candidate.create');
       
    }
     return redirect()->back()->with(['error' => 'Login Failed.Please check your Username Or Password']);
    }
    public function signUp()
    {
        return view('frontend.auth.userregistration');
    }
    public function postSignUp(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('login')->withSuccess('Your account has been created, Please sign in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('home');
    }
    public function creates()
    {
        $date1 = Carbon::today();
        $date2 = Carbon::createFromFormat('Y/m/d', '2022/09/12');
        $result = $date1->lte($date2);
        if($result )
         {
          return view('frontend.auth.personaldetails');
         }
        else
         {
          return redirect()->route('frontend.auth.login')->with(['error' => 'Last date for application expired']);
         }
    }
    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //     'reference_no'=>'required',
    //     ]);
    //     if ($validator->fails())
    //     {
    //         return redirect()->back()->with(['error' => 'Enter Reference Number']);
    //     }
    //     $payment = new Payment();
    //     $payment->user_id = Auth::user()->id;
    //     $payment->reference_no = $request['reference_no'];
    //     $payment->save();
    //     return redirect()->route('Candidate.create');
    // }
    public function getApplicationForm(Request $request)
    {
       
        $candidate = Candidate::where('user_id', Auth::user()->id)->firstOrFail();
        $academic = Academic::where('user_id', Auth::user()->id)->firstOrFail();
        $exp = Experience::where('user_id', Auth::user()->id)->firstOrFail();
        $age = Carbon::parse($candidate['age'])->age;
        $file=File::where('user_id', Auth::user()->id)->firstOrFail();

        if ($candidate) {
            $pdf = PDF::loadView('admin.applicationForm',compact('candidate','academic','exp','age','file'));
            return $pdf->download('application-form.pdf');

            // return view('admin.applicationForm', compact('candidate','academic','exp','age'));
        } else {
            echo "not applied";
        }
    

}



    public function postApplicationForm(Request $request)
    {
        return redirect()->route('login');
    }
     public function download()
    {
        return view('frontend.auth.download_af');
        
    }
      public function downloads()
    {
         $file=File::where('user_id', Auth::user()->id)->firstOrFail();

         return redirect()->back()->with(['success' => 'Application submitted successfully with application no.' . ' ' .$file->application_id]);
    }
}

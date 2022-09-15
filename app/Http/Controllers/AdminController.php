<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdminHome()
    {
        return view('frontend.auth.login');
    }
    public function viewRegistration()
    {
        return view('admin.registration');
    }
}

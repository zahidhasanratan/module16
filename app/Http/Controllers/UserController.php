<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegistrationPage(){
        return view('pages.auth.registration-page');
    }

    public function userLoginPage(){
        return view('pages.auth.login-page');
    }

    public function resetPasswordPage(){
        return view('pages.auth.reset-pass-page');
    }


     public function sendOtpPage(){
        return view('pages.auth.send-otp-page');
    }


    public function verifyOtpPage(){
        return view('pages.auth.verify-otp-page');
    }


    public function profilePage(){
        return view('pages.dashboard.profile-page');
    }
}

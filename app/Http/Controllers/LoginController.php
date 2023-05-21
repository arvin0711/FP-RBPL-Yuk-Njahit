<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('loginSignUp');
    }
    public function welcome(){
        return view('loginwelcome');
    }
    public function login(){
        return view('loginSignIn');
    }
    public function loginError(){
        return view('loginError');
    }
    public function emailSudahTerdaftar(){
        return view('loginEmailHasAnAlreadyAccount');
    }
    public function otp(){
        return view('loginOtp');
    }
    public function errorOTP(){
        return view('loginOtpError');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function editProfile(){
        return view("editProfile");
    }
    public function editProfileConfirm(){
        return view("editProfileConfirm");
    }
    public function verifAkunPembeli(){

    }


}
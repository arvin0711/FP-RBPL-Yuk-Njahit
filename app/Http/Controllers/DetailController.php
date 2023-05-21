<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function index(){
        return view('dashboard');
    }
    public function loadDetail(){
        return view('detailBaju');
    }
    public function loadDetail2(){
        return view('detailBaju2');
    }
    public function loadDetail2Error(){
        return view('detailBaju2Error');
    }


}
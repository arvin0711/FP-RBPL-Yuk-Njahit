<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchPembeliController extends Controller
{
    //
    public function index(){
        return view('dashboard');
    }
    public function searchBaju(){
        return view('dashboard');
    }
    public function gagal(){
        return view('dashboardProductNotFound');

    }


}
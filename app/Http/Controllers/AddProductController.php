<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductController extends Controller
{
    //
    public function index(){
        return view('addProduct');
    }
    public function viewMeasurement(){
        return view('viewMeasurement');
    }


}
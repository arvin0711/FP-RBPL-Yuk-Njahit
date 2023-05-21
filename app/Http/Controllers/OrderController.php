<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        return view('myOrder');
    }
    public function index2(){
        return view('payment');
    }
    public function payment2(){
        return view('payment2');
    }


    public function getDetailOrder(){
        return view("measurement");

    }

    public function getAddress(){

    }
    public function paymentMethod(){
        return view('thankYouForOrder');

    }
    public function getHistoryTransaction(){
        return view("myOrder");
    }

    public function confirmOrder(){
        return view("confirm");

    }


     public function rating(){
            return view("rating");

        }


}
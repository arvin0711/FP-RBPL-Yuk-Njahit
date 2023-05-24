@extends('layouts.ratingTemplate')
@section('title', 'Confirm Order')
@section('judul halaman', 'Confirm Order')
@section('konten')
    <div class="order-container">


        <h5>My Order</h5>



        <div class="order-item">
            <i class="fa-solid fa-x"></i>
            <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">

            <div class="order-produk">Batik</div>
            <div class="order-status">Deliver</div>


            <div id="confirm-button">
                <button type="button" class="btn btn-danger btn-lg" style="float:right">Confirm</button>
            </div>



        </div>


    </div>
@endsection

@extends('layouts.ratingTemplate')
@section('title', 'My Order')
@section('judul halaman', 'My Order')

@section('konten')
    <div class="order-container">


        <h5>My Order</h5>



        <div class="order-item">
            <i class="fa-solid fa-x"></i>
            <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">

            <div class="order-produk">Batik</div>
            <div class="order-status">Menunggu verifikasi pembayaran</div>

        </div>


    </div>
@endsection

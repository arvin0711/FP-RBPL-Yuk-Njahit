@extends('layouts.ratingTemplate')

<style>
    #checkout-button {
        position: sticky;
        bottom: -10%;
        right: 0;
        margin: 20px;
        margin-bottom: 5%;
        margin-top: -1%;


    }
</style>
@section('title', 'Shopping Cart')
@section('judul halaman', 'Shopping Cart')

@section('konten')
    <div class="order-container">
        <h5>Purchased Items</h5>
        <div class="order-item">
            <img src="{{ asset('image/jakethitam.jpg') }}" class="rounded" class="img-fluid" style="float:left">
            <div class="order-produk">Jaket Hitam Polos</div>
            <div class="order-status">Rp. 100.000</div>
        </div>
        <div class="order-item">
            <img src="{{ asset('image/jakethitam.jpg') }}" class="rounded" class="img-fluid" style="float:left">
            <div class="order-produk">Jaket Hitam Polos</div>
            <div class="order-status">Rp. 100.000</div>
        </div>




    </div>


    <div id="checkout-button">
        <button type="button" class="btn btn-danger btn-lg" style="float:right">Checkout</button>
    </div>
@endsection

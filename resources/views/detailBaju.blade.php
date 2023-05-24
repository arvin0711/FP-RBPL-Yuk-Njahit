@extends('layouts.masterTemplate')
@section('title', 'Detail Baju')
@section('judul halaman', 'Detail Baju')
@include('partial.header')

@section('konten')
    <div class="order-container" style="height:32;margin-top:-2%">
        <div class="order-item">
            <div class="container">
                <div class="text-center">
                    <img src="{{ asset('image/batik.jpg') }}" class="rounded" class="img-fluid" style="float:left">
                </div>
            </div>
        </div>
    </div>

    <div class="order-container" style="height:80%;margin-botttom:4%">
        <div class="order-item">
            <div class="detail-container">
                <div class="order-id">Jaket Hitam Polos
                </div>
                <div class="order-harga">Rp. 100.000</div>
                <div class="rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <br>
                <h6>Description</h6>

                <div class="badge-container">
                    <h6>Tailor Location <span style="margin-left:1%"> : </span><span
                            class="badge badge-secondary">Surabaya</span>
                    </h6>
                    <h6>Tailor Shop <span style="margin-left:2.9%"> : </span><span class="badge badge-secondary">Ami
                            Tailor-Gubeng</span></h6>
                    <h6>Fabric <span style="margin-left:5.8%"> : </span> <span class="badge badge-secondary">Fleece</span>
                    </h6>
                    <h6>Color <span style="margin-left:6%"> : </span><span class="badge badge-secondary">Black</span>
                    </h6>

                </div>

            </div>



        </div>



    </div>
@endsection

@include('partial.footer2')

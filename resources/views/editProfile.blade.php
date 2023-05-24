@extends('layouts.masterTemplate')
<style>
    body {
        overflow: hidden;
    }

    .container .text-center {
        margin: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        height: 100vh;
        /* Mengatur tinggi div agar gambar berada di tengah vertikal */
    }

    .text-center img {
        margin-top: 20px;
        height: 180px;
    }

    #confirm-button {
        margin-right: 20px;
    }

    #confirm-button button {
        font-size: 15px;
        padding: 2px 25px 2px 25px;
    }
</style>
@section('title', 'Edit Profile')
@section('judul halaman', 'Edit Profile')
@include('partial.header2')


@section('konten')
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('image/account.png') }}">
        </div>
    </div>
    <div class="form-container rounded">
        <form>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label">Nama</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" placeholder="Arvin Azmi Sava">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="email" placeholder="arvinazmisava0711@gmail.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-2 col-form-label">No. Telepon</label>
                <div class="col-md-10">
                    <input type="tel" class="form-control" id="phone" placeholder="081234677512">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-md-2 col-form-label">Alamat</label>
                <div class="col-md-10">
                    <input class="form-control" id="address" rows="3" placeholder="Jl.Pahlawan no 7"></input>
                </div>
            </div>
            <div id="confirm-button">
                <button type="button" class="btn btn-danger btn-lg" style="float:right"> <i
                        class="fa-regular fa-pen-to-square"></i> Edit</button>
            </div>

        </form>
    </div>
@endsection
@include('partial.footer')

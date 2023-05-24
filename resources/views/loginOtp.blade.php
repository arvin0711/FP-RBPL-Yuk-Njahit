@extends('layouts.loginTemplate')

@section('title', 'Sign Up OTP')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-xl" style="background-color: #F9DEDE">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#">
                            <h3 class="text-center-h3">Sign Up</h3>
                        </a></li>
                </ul>
            </div>
            <div class="col-xl">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#">
                            <h3>Sign In</h3>
                        </a></li>
                </ul>
            </div>
        </div>
        <form>
            <br>
            <br>
            <br>
            <br>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/otp.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input type="text" id="name" placeholder="Masukkan Kode OTP" required>
                </div>
            </div>
            <div id="confirm-button">
                <button type="button" class="btn ">Confirm</button>

            </div>
        </form>

    </div>
@endsection

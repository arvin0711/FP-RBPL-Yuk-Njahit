@extends('layouts.loginTemplate')
@section('title', 'Sign Up')

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
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/orang.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input type="text" id="name" placeholder="Nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/email.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input type="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/phone.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input type="tel" id="phone" placeholder="Phone Number" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/kunci.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input type="password" id="password" placeholder="Password" required>
                </div>
            </div>
            <div id="confirm-button">
                <button type="button" class="btn ">Sign Up</button>

            </div>

        </form>

    </div>
@endsection

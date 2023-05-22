@extends('layouts.loginTemplate')
<style>
    .row .col-xl {
        padding: 10px;
        margin-right: -30PX;
    }
</style>
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-xl">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#">
                            <h3 class="text-center-h3">Sign Up</h3>
                        </a></li>
                </ul>
            </div>
            <div class="col-xl"style="background-color: #F9DEDE; width: 100%;">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#">
                            <h3>Sign In</h3>
                        </a></li>
                </ul>
            </div>
        </div>
        <br>
        <br>
        <form>
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
                <button type="button" class="btn ">Sign In</button>
            </div>
        </form>
    </div>
@endsection

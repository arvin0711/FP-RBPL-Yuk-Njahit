@extends('layouts.templateKosong')

<style>
    body {
        overflow: hidden;
        background-color: #FFAAAA;
    }
</style>
@section('title', 'Thank You')
@section('konten')
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('image/mesin jahit.png') }}">
            <h2>THANK YOU</h2>
            <h2>FOR YOUR ORDER</h2>
        </div>
    </div>
    <div id="next-button">
        <button type="button" class="btn btn-danger"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
@endsection

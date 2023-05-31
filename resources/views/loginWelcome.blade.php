@extends('layouts.templateKosong')

<style>
    body {
        overflow: hidden;
        background-color: #ffffff;
    }
</style>
@section('title', 'Welcome')
@section('konten')
    <div class="container">
        <div class="text-center">
            <h1>Yuk Njahit</h1>
            <img src="{{ asset('image/mesin jahit.png') }}">

        </div>
    </div>
@endsection

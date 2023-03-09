@extends('index')

@section('title' , 'FireWave | Login')

@section('style')
    <style>
        body {
            background-color: #ec1c3b;
            color: #212121;
        }
    </style>
@endsection

@section('content')
    <main>
        @include('layouts.login.main')
    </main>
@endsection

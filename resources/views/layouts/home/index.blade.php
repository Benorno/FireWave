@extends('index')

@section('title' , 'Home')

@section('style')
    <style>
        body {
            background-color: #282828;
            color: white;
        }
    </style>
@endsection

@section('content')
    @include('layouts.home.header')
    @include('layouts.home.main')
    @include('layouts.home.footer')
@endsection

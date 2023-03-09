@extends('index')

@section('title' , 'FireWave | Home')

@section('style')
    <style>
        body {
            background-color: #282828;
            color: white;
        }
    </style>
@endsection

@section('content')
    <header>
        @include('layouts.home.header')
    </header>
    <main>
        @include('layouts.home.main')
    </main>
    <footer class="mt-5">
        @include('layouts.home.footer')
    </footer>
@endsection

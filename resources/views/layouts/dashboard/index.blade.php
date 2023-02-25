@extends('index')

@section('title' , 'BeatWave | Profile')

@section('style')
    <style>
        body {
            background-color: #212121;
        }
    </style>
@endsection

@section('content')
    <header>
        @include('layouts.dashboard.header')
    </header>
    <main>
{{--        @include('layouts.dashboard.main')--}}
    </main>
    <footer>
        @include('layouts.dashboard.footer')
    </footer>
@endsection


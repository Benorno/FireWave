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
        @include('layouts.profile.header')
    </header>
    <main>
        @include('layouts.profile.main')
    </main>
    <footer>
        @include('layouts.profile.footer')
    </footer>
@endsection


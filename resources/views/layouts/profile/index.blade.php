@extends('index')

@section('title' , 'Profile')

@section('style')
    <style>
        body {
            background-color: #212121;
            color: white;
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

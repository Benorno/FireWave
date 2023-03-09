@extends('index')

@section('title', 'FireWave | My Files')

@section('content')
    <header>
        @include('layouts.list.header')
    </header>
    <main>
        @include('layouts.list.main')
    </main>
@endsection

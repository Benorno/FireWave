@extends('index')

@section('title' , 'FireWave | Register')

@section('style')
    <style>
        body {
            background-color: #212121;
        }
    </style>
@endsection
<div class="container">
    <div class="row">
        {{--    logo size difference on small devices   --}}
        <div class="col-3 d-block d-sm-none">
            <a href="/"><img
                    src="https://i.postimg.cc/Fs9cpCn8/logo-no-background.png"
                    alt="firewave-logo" class="w-100 ms-5 mt-4" style="scale: 2.2"></a>
        </div>
        <div class="col-6 d-none d-sm-block ">
            <a href="/"><img
                    src="https://i.postimg.cc/Fs9cpCn8/logo-no-background.png"
                    alt="firewave-logo" class="w-50 mt-4"></a>
        </div>
    </div>
</div>

@section('content')
    <main>
        @include('layouts.register.main')
    </main>
@endsection

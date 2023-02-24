@extends('index')

@section('title' , 'Register')

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
                    src="https://i.postimg.cc/W3FtMnQ2/beatwave-low-resolution-logo-color-on-transparent-background.png"
                    alt="beatwave-logo" class="w-100 "></a>
        </div>
        <div class="col-6 d-none d-sm-block ">
            <a href="/"><img
                    src="https://i.postimg.cc/W3FtMnQ2/beatwave-low-resolution-logo-color-on-transparent-background.png"
                    alt="beatwave-logo" class="w-25 "></a>
        </div>
    </div>
</div>

@section('content')
    <main>
        @include('layouts.register.main')
    </main>
@endsection

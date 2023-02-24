@extends('index')

@section('title' , '404 | Page Not Found')

@section('style')
    <style>
        body {
            background-color: #282828;
            color: white;
        }
    </style>
@endsection
@section('content')
    <a href="javascript:history.back()" class="btn btn-outline-danger rounded-pill mt-3 ms-3"><i class="bi bi-skip-backward me-2"></i>Go Back</a>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img src="https://i.postimg.cc/j5gw5XQp/404.png" alt="404" >
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

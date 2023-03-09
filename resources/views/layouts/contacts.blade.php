@extends('index')

@section('title', 'Contacts')

@section('style')
    <style>
        body {
            background-color: #ec1c3b;
        }
    </style>
@endsection

@section('content')
    <header>
        @include('layouts.home.header')
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card card-body rounded rounded-5 mt-5 shadow">
                        <h3 class="text-center">Contact us</h3>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger col-2 rounded rounded-pill" role="button">Send <i class="bi bi-send"></i></button>
                    </div>
                </div>
                <div class="col-6">
                    <img src="https://i.postimg.cc/0QkvY0WG/Mail-sent.png" alt="sending_mail_img" class="w-100 float-end mt-5">
                </div>
            </div>
        </div>
    </main>
    <footer class="fixed-bottom">
        @include('layouts.home.footer')
    </footer>
@endsection

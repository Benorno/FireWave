@extends('index')

@section('title', 'FireWave | About')

@section('content')
    <header>
        @include('layouts.home.header')
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded rounded-5 bg-danger text-white mt-5 shadow">
                        <h1 class="text-center card-title my-3">About Us</h1>
                        <p class="card-text px-5 mb-3">Welcome to FireWave, the premier file-sharing platform for individuals and businesses alike. We
                            offer a simple, secure, and efficient way to share files online.
                            <br>
                            At FireWave, we believe that file sharing should be hassle-free, and we've worked hard to make our
                            platform as user-friendly as possible. With FireWave, you can quickly upload and share files of all
                            types and sizes, from documents and images to videos and music.
                            <br>
                            Our platform is designed with your security and privacy in mind. We use the latest encryption
                            technology to keep your files safe and secure, and we never share your information with third
                            parties.
                            <br>
                            At FireWave, we're committed to providing the best possible service to our users. Whether you're an
                            individual looking to share files with friends and family or a business looking for a secure way to
                            share sensitive information, we have the tools and expertise to meet your needs.
                            Thank you for choosing FireWave for your file-sharing needs. We look forward to serving you and
                            helping you share your files with ease!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="fixed-bottom">
        @include('layouts.home.footer')
    </footer>
@endsection

<div class="container text-white">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-6">
            <div class="rounded rounded-5 p-3" style="background-color: #ec1c3b; margin-top: 15rem">
                <h3 class="text-center">Register</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation"><b>Confirm Password</b></label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-dark mt-2 rounded-pill">Sign Up <i class="bi bi-person-plus"></i></button>
                </form>
                <p class="mt-2">Already have an account? <a href="{{ route('login') }}" class="link-dark">Login</a></p>
            </div>
        </div>
        <div class="col-6 d-none d-lg-block">
            <img src="https://i.postimg.cc/HnP6QRbd/register.png" alt="sign-up-image" class="w-100 float-end" style="margin-top: 15rem">
        </div>
    </div>
</div>

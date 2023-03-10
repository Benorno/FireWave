<div class="container">
    <div class="row">
        <div class="col">
            {{--    logo size difference on small devices   --}}
            <div class="col-3 d-block d-sm-none">
                <a href="/"><img
                        src="https://i.postimg.cc/SKvLnLSR/logo-no-background-black.png"
                        alt="firewave-logo" class="w-100 mt-4 ms-5" style="scale: 1.8"></a>
            </div>
            <div class="col-6 d-none d-sm-block ">
                <a href="/"><img
                        src="https://i.postimg.cc/SKvLnLSR/logo-no-background-black.png"
                        alt="firewave-logo" class="w-50 mt-4"></a>
            </div>
        </div>
    </div>
{{--  Alert messages  --}}
    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
        </div>
    @endif
{{------------}}
    <div class="row">
        <div class="col-6 text-white rounded rounded-5 p-3 d-none d-sm-block" style="background-color: #212121; margin-top: 10rem">
            <h3 class="text-center">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-label{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-4 form-label">E-Mail Address</label>

                    <div class="col">
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}"
                               required autofocus>

                        @if ($errors->has('email'))
                            <span class="alert alert-info">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                        @endif
                    </div>
                </div>

                <div class="form-label{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-4 form-label">Password</label>

                    <div class="col">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="alert alert-dismissible">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                        @endif
                    </div>
                </div>

                <div class="form-label">
                    <div class="checkbox">
                        <label class="form-label mt-2">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember Me
                        </label>
                    </div>
                </div>

                <div class="form-label">
                    <div class="col">
                        <button type="submit" class="btn btn-danger rounded rounded-pill">
                            Login <i class="bi bi-box-arrow-in-right"></i>
                        </button>
                    </div>
                </div>
                <div class="form-label">
                    <div class="col">
                        <p class="mt-2">Don't have an account? <a href="{{ route('register') }}" class="link-danger">Register</a></p>
                    </div>
                </div>
            </form>
        </div>
{{--   for small devices resize     --}}
        <div class="col-12 text-white rounded rounded-5 p-3 d-block d-sm-none" style="background-color: #212121; margin-top: 10rem">
            <h3 class="text-center">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-label{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-4 form-label">E-Mail Address</label>

                    <div class="col">
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}"
                               required autofocus>

                        @if ($errors->has('email'))
                            <span class="alert alert-info">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                        @endif
                    </div>
                </div>

                <div class="form-label{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-4 form-label">Password</label>

                    <div class="col">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="alert alert-dismissible">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                        @endif
                    </div>
                </div>

                <div class="form-label">
                    <div class="checkbox">
                        <label class="form-label mt-2">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember Me
                        </label>
                    </div>
                </div>

                <div class="form-label">
                    <div class="col">
                        <button type="submit" class="btn btn-danger rounded rounded-pill">
                            Login <i class="bi bi-box-arrow-in-right"></i>
                        </button>
                    </div>
                </div>
                <div class="form-label">
                    <div class="col">
                        <p class="mt-2">Don't have an account? <a href="{{ route('register') }}" class="link-danger">Register</a></p>
                    </div>
                </div>
            </form>
        </div>
{{------------}}
        <div class="col d-none d-sm-block">
            <img src="https://i.postimg.cc/5tNvjf2X/login.png" alt="login-photo-animation" class="w-100 float-end" style="margin-top: 2rem">
        </div>
    </div>
</div>

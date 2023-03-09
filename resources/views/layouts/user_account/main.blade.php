<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-6 col-offset-2">
            <div class="card card-body bg-danger text-dark mt-5 rounded rounded-5">
                <div class="card-title">
                    <h2 class="text-dark mt-2">Edit Account Information</h2>
                </div>
                <div class="card-body">
                    <form class="form-label" role="form" method="POST" action="{{ route('user.update') }}">
                        @csrf
                        @method('POST')

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-10">
                                <input id="name" type="text" class="form-control" name="name"
                                       value="{{ old('name', $user->name) }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong class="text-warning">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email Address</label>

                            <div class="col-10">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email', $user->email) }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-warning">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-10">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="text-warning">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-10">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-5">
                                <button type="submit" class="btn btn-outline-dark border border-2 border-dark rounded rounded-pill mt-3">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div>
                <img src="https://i.postimg.cc/5Nb1x6tZ/account-change.png" alt="account_change_img" class="w-100 mt-5 float-end">
            </div>
        </div>
    </div>
</div>

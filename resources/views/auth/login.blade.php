@extends('layout')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{route('login.post')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm mt-2">Dont have account? <a href="{{route('register')}}">Register</a> now!</p>
                            <div class="col">
                                <button type="submit" class="btn btn-sm btnOp">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <img src="{{asset('images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
    </div>
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Reset password</h3>
                    <p class="mb-4">Please enter your new Password to reset your account.</p>
                </div>
                <form action="{{route('password.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{request()->token}}">
                    <div class="form-group first mb-1">
                        <label for="username">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$request->email}}" name="email" id="username">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group first mb-1 ">
                        <label for="password">Password</label>
                        <input type="password" class="form-control " name="password" id="password">
                        @error('password')
                        <span class="invalid-feedback is-invalid" role="alert"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group last mb-4">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control " name="password_confirmation" id="password">
                        @error('password_confirmation')
                        <span class="invalid-feedback is-invalid" role="alert"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>

                   

                    <input type="submit" value="{{__('Reset Password')}}" name="login" id="login" class="btn btn-block btn-primary">

                    <!--<span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

                    <div class="social-login">
                        <a href="#" class="facebook">
                            <span class="icon-facebook mr-3"></span>
                        </a>
                        <a href="#" class="twitter">
                            <span class="icon-twitter mr-3"></span>
                        </a>
                        <a href="#" class="google">
                            <span class="icon-google mr-3"></span>
                        </a>
                    </div> -->
                </form>
            </div>
        </div>

    </div>

</div>
@endsection
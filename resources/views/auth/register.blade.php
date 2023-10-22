@extends('template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
    </div>
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Sign In</h3>
                    <p class="mb-4">Please enter your Email and Password to Login to your account.</p>
                </div>
                <form action="{{ route('register')}}" method="POST">
                    @csrf
                    <div class="form-group first mb-1">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="username">
                        @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group last mb-1">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="username">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                        @enderror 
                    </div>
                    <div class="form-group first mb-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group last mb-1"> 
                        <label for="password">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password">
                    </div>
                    <input type="submit" value="Sign In" class="btn btn-block btn-primary">

                </form>
            </div>
        </div>

    </div>

</div>
@endsection
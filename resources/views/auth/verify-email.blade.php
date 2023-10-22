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
                    <h3>Verify account</h3>
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <p class="mb-4">You need to verify your account.Please check your email</p>
                </div>
                <form action="{{route('verification.send')}}" method="POST">
                    @csrf
                    <input type="submit" value="Resend" name="login" id="login" class="btn btn-block btn-primary">

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
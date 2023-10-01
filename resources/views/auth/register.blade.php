@extends('layouts.layout')

@section('layout-content')
<section class="user-login my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 row d-flex">
                <div class="block col-md-10 mx-auto">
                    <div class="image align-self-center"><img class="img-fluid" src="{{ asset('/assets/images/sign-up.jpg') }}" alt="desk-image"></div>
                    <div class="content text-center">
                        <div class="logo">
						</div>
                        <div class="title-text">
							<h3>Sign Up for New Account</h3>
						</div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input id="name" type="text" class="form-control main @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your Names">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <input id="email" type="email" class="form-control main @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password" class="form-control main @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <input id="password-confirm" type="password" class="main form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
                            
                            <button type="submit" class="btn btn-primary float-end">
                                {{ __('Register') }}
                            </button>
                        </form>
                        <div class="new-acount">
							<p>Anready have an account? <a href="{{ route('login') }}">Sign In</a></p>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

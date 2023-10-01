@extends('layouts.layout')

@section('layout-content')

<section class="user-login my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 row d-flex">
                <div class="block col-md-10 mx-auto">
                    <div class="image align-self-center"><img class="img-fluid" src="{{ asset('/assets/images/front-desk-sign-in.jpg') }}" alt="desk-image"></div>
                    <div class="content text-center">
                        <div class="logo">
						</div>
                        <div class="title-text">
							<h3>Sign in to To Your Account</h3>
						</div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input id="email" type="email" placeholder="User Email Address" class="main form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password" placeholder="User Password" class="main form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </form>
                        <div class="new-acount">
							<a href="contact.html">Forget your password?</a>
							<p>Don't Have an account? <a href="sign-up.html"> Register</a></p>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
            <div class="card">
                    <div class="card-header row">
                        <img src="{{ '../storage/valcal.png' }}" style="width:40px; height:40px;" class="col-2">
                        <a href="/" class="col-7 pt-2 px-0 text-dark"><h4><strong>Valuation</strong>Calc</h4></a>
                        <h4 class="col-3 pt-2">{{ __('Register') }}</h4>
                    </div>
                    {{-- style="background-image:url(../storage/loginbg.jpg); background-size: cover;" --}}
                <div class="card-body" >
                    <form method="POST" action="{{ route('register') }}">

                        <div class="form-group row">
                            <label for="firstname" class="col-md-12 col-form-label text-md-left" style="color: wheat;">{{ __('Firstname') }}</label>

                            <div class="col-md-12">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-12 col-form-label text-md-left" style="color: wheat;">{{ __('Lastname') }}</label>

                            <div class="col-md-12">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label text-md-left" style="color: wheat;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label text-md-left" style="color: wheat;">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-left" style="color: wheat;"   >{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn navitext px-5">
                                    {{ __('Register ') }}<i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>

            <p class="mt-3"><strong>Already have an account?  &nbsp; </strong><a class="navtext" href="{{ route('login') }}">{{ __('Log In') }}</a></p>
        </div>
    </div>
</div>
@endsection

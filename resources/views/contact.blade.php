@extends('layouts.app')

@section('content')
@include('layouts.nav2')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-5">

            </div>
            <div class="col-lg-6 mt-5">
                <div class="card">
                        <div class="card-header row text-center">
                            <h4 class="col pt-2"><strong>{{ __('Contact Us') }}</strong></h4>
                        </div>

                    <div class="card-body">
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
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn navitext px-5">
                                            <i class="fas fa-paper-plane"></i>{{ __('') }}
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

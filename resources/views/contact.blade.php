@extends('layouts.app')

@section('content')
@include('layouts.nav2')
<div class="container">
    <h1 class="col pt-2 text-center"><strong>{{ __('Contact Us') }}</strong></h1>

        @if (session('message'))
            <div class="alert alert-primary alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fas fa-thumbs-up"></i>
                <strong>Success! </strong> {{ session('message') }}
            </div>
        @endif

        <div class="row justify-content-center">

            <div class="col-lg-6 mt-5 embed-responsive embed-responsive-4by3 justify-content-center">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.015709294459!2d3.326242314317235!3d6.644970323583926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzgnNDEuOSJOIDPCsDE5JzQyLjQiRQ!5e0!3m2!1sen!2sng!4v1573583533669!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="col-lg-6 mt-5">

                <p><strong><span style="color: tomato">Address: </span> No 7 Ajibodu Street, Karaole Estate Ogba, Ikeja Lagos State.</strong></p>

                <p><strong><span style="color: tomato">Phone: </span> +2348063140610</strong></p>

                <p><strong><span style="color: tomato">Email: </span> nzubechukwu.okoye@gmail.com</strong></p>

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/contact">

                            <div class="form-group row">
                                <label for="name" class="col-md-12 col-form-label text-md-left" style="color: wheat;">{{ __('Your Name') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('firstname') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
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
                                <label for="message" class="col-md-12 col-form-label text-md-left" style="color: wheat;">{{ __('Your Message') }}</label>

                                <div class="col-md-12">
                                    <textarea class="form-control" id="message" rows="4" class="form-control @error('message') is-invalid @enderror" name="message">{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn navitext px-5">
                                            Send <i class="fas fa-paper-plane"></i>{{ __('') }}
                                    </button>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

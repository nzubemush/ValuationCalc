@extends('layouts.app')

@section('content')
@include('layouts.nav2')

    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                    @if (session('status'))
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" data-show="true" id="myModal">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="alert alert-success m-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <i class="fa fa-user"></i>
                                        Success! <strong>{{ ucfirst(Auth::User()->firstname) }}</strong>. {{ session('status') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                <h3>Personal info</h3>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update', Auth::user()->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="text" name="firstname" value="{{Auth::User()->firstname}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="text" name="lastname" value="{{Auth::User()->lastname}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Company:</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="text" name="emai" value="{{Auth::User()->email}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn navitext px-5 ml-3" style="background-color:#324A5E">
                            <i class="fa fa-upload"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <form action="{{ route('user.destroy', Auth::user()->id) }}" method="POST" class="deleteGroup">
            @method('DELETE')
            @csrf
            <button class="btn navitext px-5 ml-3 mt-3" style="background-color:#324A5E">
                <i class="fa fa-exclamation-triangle"></i> Delete Account
            </button>
        </form>
    </div>

@endsection

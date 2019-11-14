@extends('layouts.app')

@section('content')
@include('layouts.nav2')

<div class="jumbotron jumbotron-fluid py-4">
    <div class="container px-5">
        <h1 class="">{{ $topic->name }}</h1>
    </div>
</div>

<div class="container">
    <div class="row mb-3 text-center">
        @foreach ($subtopics as $subtopic)
        <a href="{{ route('subtopic.show', ['subtopic' => $subtopic]) }}" class="col-md-3 pill category shadow-sm mx-2 my-3" data-toggle="tooltip" data-placement="top" title="Perform calculations associated with {{ $subtopic->name}}">
                    <h3>

                    {{ $subtopic->name}}

                    </h3>
            </a>


        @endforeach

    </div>

    <div class="row">
        <div class="col-md-6">
            <a href="javascript:history.back()" class="btn navitext mt-3 px-5 text-dark" style="background-color: #324A5E"><i class="fas fa-hand-point-left"></i> back</a>
        </div>

        <div class="col-md-6 text-center">
            <a href="javascript:history.forward()" class="btn navitext mt-3 px-5 text-dark justify-content-right" style="background-color: #324A5E"><i class="fas fa-hand-point-right"></i> forward</a>
        </div>
    </div>


    @if($errors->any())

    <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" data-show="true" id="myModal">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="alert alert-danger m-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <a><i class="fas fa-exclamation-circle"></i> &nbsp; This formula is only available for registered users <a href="{{ route('login') }}">&nbsp; Login </a>&nbsp; or <a href="{{ route('register') }}">&nbsp; Register</a></a>
                    </div>
                </div>
            </div>
        </div>
    @endif
      <!-- Modal -->
</div>

@endsection

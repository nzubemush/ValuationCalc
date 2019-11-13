@extends('layouts.app')

@section('content')
@include('layouts.nav2')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{ $topic->name }}</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
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

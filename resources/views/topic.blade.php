@extends('layouts.app')

@section('content')

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
</div>

@endsection
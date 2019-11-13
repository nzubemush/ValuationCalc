@extends('layouts.app')

@section('content')
@include('layouts.nav2')

<div class="jumbotron jumbotron-fluid" style="background-color: rgba(245, 222, 179, 0.315);">
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-2">

            <img src="{{ '../storage/icons/' . $categories->icon }}" alt="{{ $categories->name }}" style="width:100%">

        </div>
        <div class="col-md-9">

            <h1 class="display-4">{{ $categories->name }}</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>

        </div>
    </div>
</div>

</div>

<div class="container">
    <div class="row mb-3 text-center">
            @foreach ($topics as $topic)
                <a href="{{ route('topic.show', ['topic' => $topic]) }}" class="col-md-3 pill category shadow-sm mx-2 my-3" data-toggle="tooltip" data-placement="top" title="Perform calculations associated with {{ $topic->name}}">
                        <h3>

                        {{ $topic->name}}

                        </h3>
                </a>
        @endforeach
    </div>
</div>


@endsection

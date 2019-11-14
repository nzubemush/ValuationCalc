@extends('layouts.app')

@section('content')
@include('layouts.nav2')

<div class="jumbotron jumbotron-fluid">
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-2">

            <img src="{{ '../storage/icons/' . $categories->icon }}" class="img-icon" alt="{{ $categories->name }}">

        </div>
        <div class="col-md-9">

            <h1 class="display-4">{{ $categories->name }}</h1>
            <p class="lead">{{ $categories->description }}</p>

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

    <div class="row">
        <div class="col-md-6">
            <a href="javascript:history.back()" class="btn navitext mt-3 px-5 text-dark" style="background-color: #324A5E"><i class="fas fa-hand-point-left"></i> back</a>
        </div>

        <div class="col-md-6 text-center">
            <a href="javascript:history.forward()" class="btn navitext mt-3 px-5 text-dark" style="background-color: #324A5E"><i class="fas fa-hand-point-right"></i> forward</a>
        </div>
    </div>
</div>


@endsection

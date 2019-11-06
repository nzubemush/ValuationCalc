@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{ $subtopic->name }}</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="container">
    @foreach ($formulas as $formula)

        <div class="input-group col-6 mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">{{ $formula->name }}</span>
            </div>
            <input type="number" onkeyup="DoubPer()" id="{{ $formula->name }}" class="form-control quantity" placeholder="{{ $formula->desc }}">
        </div>

    @endforeach

</div>

@endsection

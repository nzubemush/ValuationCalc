@extends('layouts.app')

@section('content')
@include('layouts.nav2')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{ $subtopic->name }}</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <img src="{{ '../storage/formulas/' . $subtopic->image }}" alt="" class="img">
    </div>
</div>

<div class="container">
    @foreach ($formulas as $formula)

        <div class="input-group col-md-6 mb-3">
            <div class="input-group-prepend">
                <span><img src="{{ '../storage/formulas/' . $formula->image . '.png' }}" alt="" class="span-img mr-1"></span>
            </div>
            <input type="text" onkeypress="return isNumberKey(this, event);" onkeyup="{{ $formula->function }}" id="{{ $formula->param }}" class="form-control quantity {{ $formula->function }}" style="background-color: white; color:black;" placeholder="{{ $formula->description }}">
        </div>

    @endforeach

</div>

@endsection

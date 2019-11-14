@extends('layouts.app')

@section('content')
@include('layouts.nav2')

<div class="jumbotron jumbotron-fluid py-4">
    <div class="container px-5">
        <h1 class="">{{ $subtopic->name }}</h1>
    </div>
</div>

<div class="container">

        <div class="input-group col-md-6 mb-3 justify-content-center">

    <img src="{{ '../storage/formulas/' . $subtopic->image }}" alt="" class="img">

</div>

@foreach ($formulas as $formula)

<div class="input-group col-md-6 mb-3">
    <div class="input-group-prepend">
        <span><img src="{{ '../storage/formulas/' . $formula->image . '.png' }}" alt="" class="span-img mr-1"></span>
    </div>
    <input type="text" onkeypress="return isNumberKey(this, event);" onkeyup="{{ $formula->function }}" id="{{ $formula->param }}" class="form-control quantity {{ $formula->function }}" style="background-color: white; color:black;" placeholder="{{ $formula->description }}">
</div>

@endforeach

<a href="javascript:history.back()" class="btn navitext mt-3 px-5 text-dark ml-3" style="background-color: #324A5E"><i class="fas fa-hand-point-left"></i> back</a>
</div>


@endsection


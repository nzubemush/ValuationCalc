@extends('layouts.app')

@section('content')

<div class="col-md-6 px-3 py-3 text-center"`>
  <h1 class="">{{ $subtopic->name }}</h1>
  <img src="{{ '../storage/' . $subtopic->image }}" alt="" class="img">
</div>

<div class="container">
    @foreach ($formulas as $formula)

        <div class="input-group col-6 mb-3">
            <div class="input-group-prepend">
                <span><img src="{{ '../storage/' . $formula->image . '.png' }}" alt="" class="span-img mr-1"></span>
            </div>
            <input type="text" onkeypress="return isNumberKey(this, event);" onkeyup="{{ $formula->function }}" id="{{ $formula->param }}" class="form-control quantity" placeholder="{{ $formula->description }}">
        </div>

    @endforeach

</div>

@endsection

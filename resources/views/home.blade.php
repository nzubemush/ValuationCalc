@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">ValuationCalc</h1>
  <p class="lead">Quickly perform complex calculations with the ease only ValuationCalc can provide. Save time on logic and improve your speed, efficiency and productivity. </p>
</div>

<div class="container">
    <div class="row mb-3 text-center justify-content-center">
        @foreach ($categories as $category)

        <a href="" class="cardi {{ $category->name }} shadow-sm mx-2 my-3">
                <div class="overlay"></div>
            <div class="circle">

            </div>
            <p>{{ $category->name }}</p>
        </a>

        @endforeach

    </div>
    
</div>


@endsection

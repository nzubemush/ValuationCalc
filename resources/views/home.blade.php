@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-3 mx-auto text-center">
        <h1 class="display-4"><img src="{{ '../storage/valcal.png' }}" class="home-image"><strong>Valuation</strong>Calc</h1>
        <p class="lead">Quickly perform complex calculations with the ease only ValuationCalc can provide. Save time on logic and improve your speed, efficiency and productivity. </p>
    </div>
    <div class="container h-100 mb-5">
        <div class="d-flex justify-content-center h-100">
            <form action="{{ route('search') }}" method="POST">
                    @csrf
                <div class="searchbar">
                    <input class="search_input" type="text" name="query" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3 text-center justify-content-center">
        @foreach ($categories as $category)

        <a href="{{ route('categories.show', ['categories' => $category]) }}" class="cardi category shadow-sm mx-2 my-3">
                <div class="overlay"></div>
            <div class="circle">
                <img src="{{ '../storage/icons/' . $category->icon }}" alt="" class="img">
            </div>
            <p>{{ $category->name }}</p>
        </a>

        @endforeach

    </div>

</div>


@endsection

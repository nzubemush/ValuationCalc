@extends('layouts.app')

@section('content')
@include('layouts.nav')

@if (session('welcome'))
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute;">
    <div class="toast-header">
      <strong class="mr-auto">Welcome {{ Auth::user()->firstname}}</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
        {{ session('welcome') }}
    </div>
  </div>
@endif

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
                    <input class="search_input" type="text" name="query" placeholder="Search..." autocomplete="off">
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

@if (session('global'))
    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" data-show="true" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="alert alert-warning m-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ session('global') }}</strong> So sad to see you go &nbsp; <i class="fa fa-frown"></i>
                </div>
            </div>
        </div>
    </div>
@endif


@endsection

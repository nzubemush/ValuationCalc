@extends('layouts.app')

@section('content')
@include('layouts.nav2')
<div class="card">
        <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

        <div class="card-body">

            @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                <h2>{{ ucfirst($type) }}</h2>

                @foreach($modelSearchResults as $searchResult)
                    <ul>
                        <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                    </ul>
                @endforeach
            @endforeach

        </div>
    </div>

    <a href="javascript:history.back()" class="btn navitext mt-3 px-5 text-dark ml-3" style="background-color: #324A5E"><i class="fas fa-hand-point-left"></i> back</a>

    @if(session('msg'))

    <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" data-show="true" id="myerrorModal">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="alert alert-danger m-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <a><i class="fas fa-exclamation-circle"></i> &nbsp; This formula is only available for registered users <a href="{{ route('login') }}">&nbsp; Login </a>&nbsp; or <a href="{{ route('register') }}">&nbsp; Register</a></a>
                    </div>
                </div>
            </div>
        </div>
    @endif
      <!-- Modal -->
@endsection

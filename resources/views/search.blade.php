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
@endsection

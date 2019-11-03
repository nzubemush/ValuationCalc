@extends('layouts.app')

@section('content')

    @foreach ($topics as $topic)

    {{ $topic->name}}
    @endforeach


@endsection

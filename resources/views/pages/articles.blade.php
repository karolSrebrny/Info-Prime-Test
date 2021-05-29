@extends('layout')

@section('content')

    @foreach($articles as $article)
    @include('partials.article', ['article' => $article])
        @endforeach

@endsection

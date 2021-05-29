@extends('layout')

@section('title', "Update {$article->title}")

@section('content')
    @include('article.form.update')
@endsection

@extends('layout')

@section('title', "Article {$article->title}")

@section('content')
    <div class="mt-3">
        <div class="card">
            <h5 class="card-header">{{$article->title}}</h5>
            <div class="card-body">
                <p class="card-text">
                    <div class="container">
                <p>Description: </p>
                <div class="container">
                    {{ $article->description }}
                </div>
            </div>
            <div class="container">
                <p>Content: </p>
                <div class="container">
                    {{ $article->content }}
                </div>
            </div>
            <div class="container">
                <img class="card-img" src="{{ $article->image_url }}" alt="Image">
            </div>
            <div class="card-footer text-muted">
                Author: {{ $article->createdBy->name }} |
                <small>
                    {{$article ->created_at->diffforhumans()}}
                </small>
            </div>
        </div>
    </div>

@endsection

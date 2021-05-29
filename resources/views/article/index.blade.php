@extends('layout')

@section('content')
    @if(!count($articles))
        <div>No data</div>
    @else
        @foreach($articles as $article)
            <div class="m-2">
                @include('partials.article', ['article' => $article])
            </div>
        @endforeach
        {{ $articles->links() }}
    @endif
@endsection

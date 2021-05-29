@extends('layout')


@section('title', 'Articles')


@section('content')
    <form method="post">
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="{{ @old('title', $article->title ?? null) }}">
        </div>
        @if ($errors->has('title'))
            @foreach($errors->get('title') as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" maxlength="500">{{ @old('description', $article->description ?? null) }}</textarea>
        </div>
        @if ($errors->has('description'))
            @foreach($errors->get('description') as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="form-group">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" cols="30"
                      rows="10" maxlength="500">{{ @old('content', $article->content ?? null) }}</textarea>
        </div>
        @if ($errors->has('content'))
            @foreach($errors->get('content') as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>
        @csrf

        <div class="form-group">
            <input type="submit" class="btn btn-primary mb-3" value="Save">
        </div>
    </form>
@endsection

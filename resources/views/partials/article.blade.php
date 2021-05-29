<div class="card">
    <h5 class="card-header">{{$article->title}}</h5>
    <div class="card-body">
        <p class="card-text">{{$article->description}}</p>
        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Details</a>
        @auth()
            <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-success">Edit</a>
            <form method="POST" action="{{ route('admin.article.delete', $article->id) }}" class="btn">
                {{ csrf_field() }}
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete Article">
            </form>
        @endauth
    </div>
    <div class="card-footer text-muted">
        <small>
            {{$article ->created_at->diffforhumans()}}
        </small>
    </div>
</div>

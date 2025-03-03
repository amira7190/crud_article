@extends('articles.layout')

@section('content')
<div class="container">
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-success">Create New Article</a>
    
    @foreach($articles as $article)
        <div class="card p-3 mb-2">
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->description }}</p>
            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">View</a>
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection

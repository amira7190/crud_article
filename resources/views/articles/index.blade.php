@extends('articles.layout')

@section('content')
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}">Create New Article</a>
    
    @foreach($articles as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->description }}</p>
            <a href=" {{route('articles.show', $article->id)}}">View</a>
            <a href=" {{ route('articles.edit', $article->id) }}">Edit</a>
            <form action=" {{ route('articles.destroy', $article->id) }} " method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection

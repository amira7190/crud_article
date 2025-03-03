@extends('articles.layout')

@section('content')
<div class="container">
    <h1>Edit Article</h1>
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>

            @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('articles.update', $article) }}" method="POST">
            @csrf
            @method('PUT') 

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $article->title) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" required>{{ old('description', $article->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date', $article->date) }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </form>

</div>
@endsection
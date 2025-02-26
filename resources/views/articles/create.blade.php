@extends('articles.layout')

@section('content')
    <h1>Create Article</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="description" required></textarea>
        <button type="submit">Create</button>
    </form>
@endsection


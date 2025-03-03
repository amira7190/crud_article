@extends('articles.layout')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description}}</p>
    <p><strong>Date:</strong> {{$article->date}}</p>
    <a href="{{route ('articles.edit' , $article)}}" class="btn btn-primary">Edit</a>
    <a href="{{route ('articles.index' )}}" class="btn btn-secondary" >Back</a>
</div>
@endsection
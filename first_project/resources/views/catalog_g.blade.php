@extends('master')

@section('title', "Каталог")

@section('content')
    <h1>Книги жанра: {{ $genre->title }}</h1>

    @foreach ($genre->books as $book)
        @include('card_book', ["book" => $book])
    @endforeach

@endsection
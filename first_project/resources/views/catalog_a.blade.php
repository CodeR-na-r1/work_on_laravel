@extends('master')

@section('title', "Каталог")

@section('content')
    <h1>Книги автора: {{ $author->initials_name }}</h1>

    @foreach ($author->books as $book)
        @include('card_book', ["book" => $book])
    @endforeach

@endsection
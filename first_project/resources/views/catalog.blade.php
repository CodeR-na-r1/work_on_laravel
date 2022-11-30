@extends('master')

@section('title', "Каталог")

@section('content')
    <h1>Каталог</h1>

    @foreach ($items as $book)
        @include('card_book', $book)
    @endforeach

@endsection
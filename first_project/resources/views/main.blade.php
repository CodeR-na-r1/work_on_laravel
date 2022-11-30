@extends('master')

@section('title', 'Главная')

@section('content')
    <h1>Main page</h1>

    <br>
    <h3>Каталог по авторам:</h3>
    @foreach ($authors as $author)
        <div>
            <a href="{{ route('catalog_a', $author->id); }}"> {{ $author->initials_name; }} </a>
        </div>
    @endforeach

    <br>
    <h3>Каталог по жанру:</h3>
    @foreach ($genres as $genre)
        <div>
            <a href="{{ route('catalog_g', $genre->id); }}"> {{ $genre->title; }} </a>
        </div>
    @endforeach

    <br>
    <a href="{{ route('catalog'); }}">
        <h2>Смотреть все</h2>
    </a>

@endsection
@extends('master')

@php
    $book = App\Models\Book::find($book_id);
    $comments = $book->comments;
@endphp

@section('title', $book->title )

@section('content')
    <h1>{{ $book->title; }}</h1>
        
    <div class="book_info">
        <div>
            <span class="book_block_span">Автор: </span>
            {{ $book->author->initials_name; }}
        </div>
        
        <div>
            <span class="book_block_span">Жанр: </span>
            {{ $book->genre->title; }}
        </div>
        
        <div>
            <span class="book_block_span">Год: </span>
            {{ $book->year; }}
        </div>
        
        <div>
            <span class="book_block_span">Описание: </span>
            {{ $book->description; }}
        </div>

        <div>
            <span class="book_block_span">Цена: </span>
            {{ $book->price; }} ₽
        </div>
    </div>

    @include('messages')

    <h3>Добавить комментарий</h3>

    <div class="form_comment_conainter">
        <form action="{{ route('item_add_comment', $book->id); }}" method="POST" class="form_comment">
            @csrf
            <div class="form_comment_elem">
                <label for="name">Имя: </label>
                <input id="name" type="text" name="name" placeholder="Введите имя" value='{{ old("name"); }}'>
            </div>

            <div class="form_comment_elem">
                <label for="email">Email: </label>
                <input id="email" type="email" name="email" placeholder="Введите email" value='{{ old("email"); }}'>
            </div>

            <div class="form_comment_elem">
                <textarea name="comment" placeholder="Введите здесь свой комментарий" cols="30" rows="10">{{ old("comment"); }}</textarea>
            </div>

            <div class="form_comment_elem">
                <center><button type="submit">Отправить</button></center>
            </div>
            
        </form>
    </div>

    <h3>Комментарии других пользователей:</h3>

    <div class="comment_block">
        @foreach ($comments as $comment)
            <div class="comment_subblock">
                <div>
                    <span>Имя: {{ $comment->name_creator }} ({{ $comment->email_creator }})</span>
                </div>
                {{ $comment->text_comment }}
            </div>
            <div class="line"></div>
        @endforeach
    </div>

@endsection
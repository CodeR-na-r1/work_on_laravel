<div class="book_block">
    <a href="{{ route('item', $book->id); }}"> {{$book->title}} </a>
    <div>Год: {{ $book->year; }}</div>
    <div>Автор: {{ $book->author->initials_name; }}</div>
    <div>Жанр: {{ $book->genre->title; }}</div>
    <div>Цена: {{ $book->price; }}</div>
</div>
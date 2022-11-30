<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Book;

class MainController extends Controller
{
    public function main()
    {
        return view("main", ['authors' => Author::get(), 'genres' => Genre::get()]);
    }

    public function catalog()
    {
        return view("catalog", ['items' => Book::get()]);
    }

    public function catalog_a($id_author)
    {
        return view("catalog_a", ['author' => Author::find($id_author)]);
    }

    public function catalog_g($id_genre)
    {
        return view("catalog_g", ['genre' => Genre::find($id_genre)]);
    }

    public function item($book_id = null)
    {
        return view("item", ['book_id' => $book_id]);
    }

    public function about()
    {
        return view("about");
    }
}
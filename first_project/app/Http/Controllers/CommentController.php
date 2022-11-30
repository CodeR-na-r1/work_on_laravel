<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CommentRequest;

use App\Models\Comment;

use App\Events\CommentCreated;

class CommentController extends Controller
{
    public function item_add_comment($book_id, CommentRequest $req)
    {
        $comment = new Comment();
        $comment->book_id = $book_id;
        $comment->name_creator = $req->input('name');
        $comment->email_creator = $req->input('email');
        $comment->text_comment = $req->input('comment');

        $comment->save();
        
        event(new CommentCreated($book_id));

        // session(['success' => 'Комментарий добавлен!']);

        return redirect()->route('item', $book_id)->with('success', 'Комментарий добавлен!');
    }
}

<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Events\CommentCreated;
use App\Listeners\NewCommentNotification;

class NewCommentNotification
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CommentCreated $event)
    {
        if (session()->has('q_comments'))
        {
            session(['q_comments' => session('q_comments') + 1]);
        }
        else
        {
            session(['q_comments' => 1]);
        }
    }
}
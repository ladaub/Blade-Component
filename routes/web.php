<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment => $comment']);
});

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );

    return redirect("/comments/{$comment->id}/edit");
});

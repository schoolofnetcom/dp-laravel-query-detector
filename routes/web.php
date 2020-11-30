<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    // $posts = Post::all();
    $posts = Post::with('comments', 'tags')->get();
    return view('welcome', compact('posts'));
});

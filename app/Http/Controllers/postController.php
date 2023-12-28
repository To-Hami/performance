<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        // With N + 1 Query Problem:
       // $posts = Post::all();

        //$posts = Post::with('user')->get();

        $users = User::with('comments')->get();
      //  $users = User::count();



        // The correct way with Eager loading:
        // $posts = Post::with('user')->get();

        // Or you can load the relationship later
        // $posts->load('user');

        return view('posts.index', compact('users'));
    }
}

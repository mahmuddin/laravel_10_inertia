<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all post from database
        $posts = Post::latest()->get();

        //render with data "posts"
        return Inertia::render('Post/Index', [
            'posts' => $posts
        ]);
    }
}

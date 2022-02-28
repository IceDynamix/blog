<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use function view;

class BlogController extends Controller
{
    public function list() {
        $posts = BlogPost::orderByDesc('created_at')->take(10)->get();
        return view('blog.home', ['posts' => $posts]);
    }
}

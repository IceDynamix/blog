<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;

class PostController extends Controller
{
    public function show(BlogPost $post)
    {
        return view('blog.post', ['post' => $post]);
    }
}

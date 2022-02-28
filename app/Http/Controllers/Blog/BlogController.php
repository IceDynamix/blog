<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use function view;

class BlogController extends Controller
{
    public function list() {
        $data = [];
        $data['posts'] = BlogPost::orderByDesc('id')->paginate(10);

        return view('blog.home', $data);
    }
}

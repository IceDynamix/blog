<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list() {
        $posts = BlogPost::orderByDesc('created_at')->take(10)->get();
        return view('home', ['posts' => $posts]);
    }
}

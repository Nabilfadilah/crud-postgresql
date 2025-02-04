<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = post::paginate(5);

        return view("posts.index", compact('posts'));
    }
}

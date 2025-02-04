<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    // view page
    public function index(Request $request)
    {
        $posts = post::paginate(5);

        return view("posts.index", compact('posts'));
    }

    // add 
    public function create(Request $request)
    {
        return view("posts.create");
    }

    // store post add
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "body" => "required"
        ]);

        Post::create([
            "title" => $request->title,
            "body" => $request->body
        ]);

        return redirect()->route("post.index")->with("success", "Post created.");

        // console
        // dd($request->all());
    }
}

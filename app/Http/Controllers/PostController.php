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

    // edit 
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        return view("posts.edit", compact("post"));
    }

    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required",
            "body" => "required"
        ]);

        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route("post.index")->with('success', "Post updated.");
        // dd($request->all());
    }

    // show post
    public function show(Request $request, $id)
    {
        $post = Post::find($id);

        return view("posts.show", compact("post"));
    }

    // delete 
    public function delete(Request $request, $id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route("post.index")->with("success", "Post deleted.");
    }
}

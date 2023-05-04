<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Termwind\Components\Paragraph;

class PostsController extends Controller
{
    function showMain() {
        $title = "Finsweet";
        $posts = Post::query()->with("paragraphs")->orderBy("created_at", "desc")->get();

        return view("posts.list", compact("title", "posts"));
    }

    function showInfo(Request $request) {
        $title = "Post name";

        $post_id = $request->route("id");

        $post = Post::query()->with("paragraphs")->find($post_id);

        $user = User::query()->find($post->user_id);

        return view("posts.info", compact("title", "post", "user"));
    }

    function showCreation() {
        $title = "Create post";

        return view("posts.creation", compact("title"));
    }

    function create(Request $request) {
        $rules = [
            "paragraph.*" => "required",
            "image" => "required|mimes:jpg,jpeg,png|max:2048",
            "title" => "required",
            "category" => "required",
        ];

        $messages = [
            "paragraph.*.required" => "All paragraphs must contain text",
            "image.required" => "Not all files selected",
            "image.mimes" => "Images must be jpg, jpeg or png",
            "image.max" => "Image is too big",
            "title.required" => "Title is required",
            "category.required" => "Category is required",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back();
        }

        $photo = $request->file("image")->store("public");

        $post = Post::create([
            "user_id" => Auth::user()->id,
            "category" => $request->category,
            "title" => $request->title,
            "image" => $photo,
        ]);

        foreach($request->paragraph as $paragraph) {
            \App\Models\Paragraph::create([
                "post_id" => $post->id,
                "text" => $paragraph,
            ]);
        }

        return redirect()->route("main-page")->with("success", "Post created");
    }
}

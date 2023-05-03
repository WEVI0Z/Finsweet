<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function showMain() {
        $title = "Finsweet";
        $posts = [1, 2, 3, 4, 5, 6];
    
        return view("posts.list", compact("title", "posts"));
    }

    function showInfo() {
        $title = "Post name";

        return view("posts.info", compact("title"));
    }
}

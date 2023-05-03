<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function showMain() {
        $title = "Finsweet";
    
        return view("posts.list", compact("title"));
    }

    function showInfo() {
        $title = "Post name";
    
        return view("posts.info", compact("title"));
    }
}

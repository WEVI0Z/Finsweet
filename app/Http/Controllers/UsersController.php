<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function showLogin() {
        $title = "Login";
    
        return view("users.login", compact("title"));
    }

    function showRegister() {
        $title = "Register";
    
        return view("users.register", compact("title"));
    }
}

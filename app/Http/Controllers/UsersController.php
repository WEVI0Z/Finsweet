<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    function login(Request $request) {
        if(Auth::attempt(["password" => $request->password, "name" => $request->login])) {
            return redirect()->route("main-page")->with("success", "Login success");
        }

        return redirect()->back()->with("error", "Invalid login or password");
    }

    function register(Request $request) {
        $rules = [
            "login" => "required|unique:users",
            "password" => "required|confirmed",
        ];

        $messages = [
            "login.required" => "Login is required",
            "login.unique" => "The user with the same login already exists",
            "password.required" => "Password is required",
            "password.confirmed" => "Password not confirmed",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->validate();

        $user = User::create([
            "name" => $request->login,
            "password" => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route("main-page")->with("success", "Register success");
    }

    function logout() {
        Auth::logout();
        
        return redirect()->route("main-page")->with("success", "Logout success");
    }
}

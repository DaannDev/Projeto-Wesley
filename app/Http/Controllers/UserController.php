<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view("register");
    }

    public function register(Request $request) {
       $user = new User;
       $user = $user -> create ($request -> all());
       return Redirect::to("home");
    }
}

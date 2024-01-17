<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view("users.create");
    }

    public function store(Request $request) {
        $request->validate([
            "username" => ["string", "required", "max:255"],
            "email" => ["email", "required", Rule::unique('users', 'email')],
            "password" => ["required", "min:4", "max:5"]
        ]);

        dd($request->email);
    }
}

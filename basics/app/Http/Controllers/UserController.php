<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    public function show($id)
    {
        return view('user', [
            'user' => User::findOrFail($id)
        ]);
    }
}

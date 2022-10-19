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
    public function store(Request $request)
    {
        $input = $request->input('name');
        // $uri = $request->path();
        //  $host =$request->host();
        // dd($host);
        return view("store",compact($input));
    }

}

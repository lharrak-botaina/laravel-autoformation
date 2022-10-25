<?php

use Carbon\Factory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    $users= \App\Models\User::has('posts')-> with('posts')->get();
    $users[0]->posts()->create([
        'title'=>'post 4'
    ]);


    // \App\Models\Adress::create([
    //     'user_id' => 2,
    //     'country'=>'morocco'
    // ]);
    // $users = \App\Models\User::all();
    // return view('users.index', compact('users'));
    // $users = \App\Models\User::with('addresses')->get();
    // $users[0]->addresses()->create([
    //     'country'=>'Nepal'
    // ]);
    return view('users.index', compact('users'));

});



route::get('/posts',function(){
    // \App\Models\Post::create([
    //     'user_id' => 1,
    //     'title' => 'Lorem Ipsum',

    // ]);
    $posts=\App\Models\Post::get();

    return view('posts.index', compact('posts'));

});

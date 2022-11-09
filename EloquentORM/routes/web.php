<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationsController;
use App\Models\Post;

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

Route::get('has-one',[RelationsController::class,'hasOneRelation']);
Route::get('hospital-has-many',[RelationsController::class,'getHospitalDoctors']);

Route::get('/posts',function(){
    // \App\Models\Tag::create([
    //     'name'=>'laravel'
    // ]);
    // \App\Models\Tag::create([
    //     'name'=>'PHP'
    // ]);
    // \App\Models\Tag::create([
    //     'name'=>'javascript'
    // ]);
    // $tag = \App\Models\Tag::first();
    // $post = \App\Models\Post::with('tags')->first();
    // // $post->tags()->attach([2,3]);

    //     dd($post);
    $posts= \App\Models\Post::with(['tags'])->get();
    return view('posts.index',compact('posts'));

});
route::get('tags',function(){
$tags =\App\Models\Tag::with('posts')->get();
return view('tags.index',compact('tags'));
});

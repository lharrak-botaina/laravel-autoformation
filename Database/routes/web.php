<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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



Route::controller(UserController::class)->group(function(){
    Route::get('/singleRow', 'singleRow');
    Route::get('/select', 'select');
    Route::get('/list','list');
    Route::get('/users','index');


});

Route::get('/show',[EmployeeController::class,'show']);
   
   
Route::get('/inner-join',[PostController::class,'innerJoinCaluse']);
Route::get('/left-join',[PostController::class,'leftJoinCaluse'])->name('post.leftjoin');
Route::get('/right-join',[PostController::class,'rightJoinCaluse']);

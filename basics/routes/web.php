<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvisionServer;

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



//-------------------Routing types-------------------- :

Route::get('/test', [TestController::class,'index']);
//Required Parameters
Route::get('/test/{id}', function ($id) {
    return 'Get id :'.$id;
});
Route::match(['get', 'post'], '/name', function () {
    $name='lharrak';
    return $name;
});
Route::get('/search/{botaina}', function ($botaina) {
    return $botaina;
})->where('botaina', '.*');
//View Routes
  // Route::view('/welcome', 'welcome');
//Redirect Routes
  // Route::redirect('/name', '/me');

//----------------------------end-----------------------------------


Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/userProfile', ProvisionServer::class);
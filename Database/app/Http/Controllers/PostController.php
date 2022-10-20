<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function innerJoinCaluse(){
        $request = DB::table('user')
        ->join('posts','user.id','=','posts.user_id')
        ->select('user.name','posts.title')
        ->get();
        return $request;
    }


    public function leftJoinCaluse(){
        $result = DB::table('user')
        ->leftJoin('posts','user.id','=','posts.user_id')
       
        ->get();
        return $result;
    }
    public function rightJoinCaluse(){
        $result = DB::table('user')
        ->rightJoin('posts','user.id','=','posts.user_id')
       
        ->get();
        return $result;
    }
}


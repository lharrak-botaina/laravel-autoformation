<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    public function hasOneRelation(){
        $user = User::with(['phone'=>function($query){
            $query->select('code','phone','user_id');
        }])->find(1);
        // $user = User::with(relations:'phone')->find(1);

        return response()->json($user);
    }
}

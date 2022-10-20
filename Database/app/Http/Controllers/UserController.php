<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   //1-Get all data from Database 
    public function index()
    {
    
        $user = DB::table('users')->get();
 
        return view('index',compact('user'));
    }

    



    //2-Retrieving A Single Row / Column From A Table
    public function singleRow()
    {
        $user = DB::table('users')->where('name','botaina')->first();
        // $email = DB::table('users')->where('name', 'lharrak')->value('email');
        return $user->email;
    }

   

    //3-Retrieving A List Of Column Values
    public function list()
    {
         
        $names = DB::table('users')->pluck('name');
        foreach ($names as $name) {
            echo $name ;
        }


        // 4-Aggregates(count, max, min, avg,sum)
            // $user = DB::table('users')->count();
            // return $user;
        
    }


    //5-Select Statements
    public function select()
    {
        $users = DB::table('users')
            ->select('name', 'email as user_email')
            ->get();
            return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

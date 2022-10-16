<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        //1 . using raw sql quieries
        // $users=DB::select('select * from users');
        // dd($users);
        //2.using the query builder
        // $users=DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($users);
        //3. Eloquent ORM
        $student=Student::all();
        dd($student);
        // $student =new Student();
        // $student->name ="new";
        // $student->email ="email@gmail.com";
        // $student->save();

        return view('welcome');
    }
}

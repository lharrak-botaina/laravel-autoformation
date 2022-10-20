<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function show(){
        return DB::table('employees')
        ->join('company','employees.id',"=",'company.employee_id')->get();
        
    }
}

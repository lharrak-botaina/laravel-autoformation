<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Hospitals;
use App\Models\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    ##################### one to one
    public function hasOneRelation(){
        $user = User::with(['phone'=>function($query){
            $query->select('code','phone','user_id');
        }])->find(1);
        // $user = User::with(relations:'phone')->find(1);

        return response()->json($user);
    }
    #################### one to many #######################

    public function getHospitalDoctors(){
        $hospital = Hospitals::find(1);
        // return $hospital->doctors;  // retyrn hospital doctors
        return $hospital = Hospitals::with(relations:'doctors')-> find(1); // return hospital with the dooctors
        // return $hospital->name;
        // // $doctors =$hospital->doctors;
        // foreach ($doctors as $doctor){
        //     echo $doctor->name.'<br>';
        // }
        $doctor = Doctors::find(3);// bring the hospital of the doctor '3'
       return $doctor->hospital;

    }
}

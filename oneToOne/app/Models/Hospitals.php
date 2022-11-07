<?php

namespace App\Models;

use App\Models\Doctors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospitals extends Model
{
    use HasFactory;
    protected $table = "hospitals";
    protected $fillable = ['name','address','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps =true ;


    public function doctors(){
        return $this->hasMany(Doctors::class,foreignKey:'hospital_id',localKey:'id');
    }
}

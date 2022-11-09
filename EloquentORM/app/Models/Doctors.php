<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $table = "doctors";
    protected $fillable = ['name','title','hospital_id','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps =true ;

    public function hospital(){
        return $this->belongsTo(Hospitals::class,foreignKey:'hospital_id');

    }
}

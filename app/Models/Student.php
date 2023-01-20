<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;
    protected $table = "students";

    protected $fillable = [

        'id',
        'name',
        'age',
        'phone',
        'updated_at',
        'created_at'

    ];
    // public function student(){
    //     return $this->hasOne('students','id','name','age','phoneno');
    // }


}

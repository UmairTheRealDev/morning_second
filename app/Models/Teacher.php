<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $Primarykey = "id";
    protected $table = "_mainteachers";

    // protected $fillable = [
    //     "name",
    //     "email",
    //     "pass",

    // ];
}

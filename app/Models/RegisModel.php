<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisModel extends Model 

{
    use HasFactory; 

    protected $table = "users";
    protected $fillable =[
        'nim', 
        'nama',
        'email',
        'password',
    ];

}

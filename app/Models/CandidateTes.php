<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CandidateTes extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
}

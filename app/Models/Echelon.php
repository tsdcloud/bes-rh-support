<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echelon extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'uuid'
    ];
}

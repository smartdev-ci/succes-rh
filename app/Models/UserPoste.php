<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPoste extends Model
{
    
    use HasFactory;

    protected $fillable = [
        "intitule_post",
    ];
}

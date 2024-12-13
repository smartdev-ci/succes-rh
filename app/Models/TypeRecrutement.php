<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeRecrutement extends Model
{
    use HasFactory;

    protected $fillable = [
        "type_recrutement",
    ];

    public function type_recrutement() {

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recrutement extends Model
{
    use HasFactory;

    protected $fillable = [
        "titre",
        "lieu",
        "descriptif_entreprise",
        "descriptif_poste",
        "profil",
        "competences",
        "formation",
        "experiences",
        "type_recrutement",
        "user_id",
        "status",
    ];
}

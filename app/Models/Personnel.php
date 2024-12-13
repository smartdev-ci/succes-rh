<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom_complet",
        "dob",
        "matricule",
        "contacts",
        "id_site",
        "id_client",
        "id_post",
    ];
}

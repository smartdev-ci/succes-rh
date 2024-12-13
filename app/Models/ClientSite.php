<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientSite extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom_site",
        "id_client",
    ];
}

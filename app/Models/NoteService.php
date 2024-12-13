<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NoteService extends Model
{
    use HasFactory;
    protected $fillable = [
        "note_service"
    ];
}

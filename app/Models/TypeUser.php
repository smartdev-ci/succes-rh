<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    use HasFactory;
    protected $fillable = [
        "type_user",
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'type_user', 'id');
    }
}

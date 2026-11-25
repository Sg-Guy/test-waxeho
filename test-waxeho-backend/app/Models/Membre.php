<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $fillable = [
        "nom",
        "email"
    ];


    public function emprunts()
    {
        return $this->hasMany(Emprunt::class);
    }
}

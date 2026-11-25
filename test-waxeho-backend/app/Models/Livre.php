<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = [
        "titre",
        "auteur",
        "isbn",
        "nbr_exemplaires"

    ];

    public function emprunts()
    {
        return $this->belongsTo(Emprunt::class);
    }
}

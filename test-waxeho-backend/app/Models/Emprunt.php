<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    protected $fillable = [
        "membre_id",
        "livre_id",
        "date_emprunt",
        "date_retour",
        "status"
    ];

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }

    public function livres()
    {
        return $this->hasMany(Livre::class);
    }
}

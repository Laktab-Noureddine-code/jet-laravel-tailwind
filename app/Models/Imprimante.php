<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imprimante extends Model
{
    /** @use HasFactory<\Database\Factories\ImprimanteFactory> */
    use HasFactory;
    protected $fillable = [
        "materiel_id",
        "identifiant_noir",
        "identifiant_bleu",
        "identifiant_magenta",
        "identifiant_jaune",
        "toner_noir",
        "toner_bleu",
        "toner_magenta",
        "toner_jaune"
    ];

    public function materiels()
    {
        return $this->belongsTo(Materiel::class, 'materiel_id');
    }
}

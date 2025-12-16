<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'filiere',
        'niveau',
        'enseignant_id',
    ];

    // Define the relationship to Enseignant
    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }
}

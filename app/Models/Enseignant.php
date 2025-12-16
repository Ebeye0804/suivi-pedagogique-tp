<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'specialite',
    ];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}

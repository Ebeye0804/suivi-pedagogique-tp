<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::with('enseignant')->get();
        return Inertia::render('Etudiants', [
            'etudiants' => $etudiants
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer les enseignants pour le select
        $enseignants = Enseignant::all();
        return Inertia::render('EtudiantsCreate', [
            'enseignants' => $enseignants
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'matricule' => 'required|string|max:50',
        'nom' => 'required|string|max:100',
        'prenom' => 'required|string|max:100',
        'filiere' => 'required|string|max:100',
        'niveau' => 'required|string|max:100',
        'enseignant_id' => 'required|exists:enseignants,id',
        ]);
            Etudiant::create([
                'matricule' => $request->matricule,
                'nom'       => $request->nom,
                'prenom'    => $request->prenom,
                'filiere'   => $request->filiere,
                'niveau'    => $request->niveau,
                'enseignant_id' => $request->enseignant_id,
            ]);
            return redirect()->route('etudiants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}


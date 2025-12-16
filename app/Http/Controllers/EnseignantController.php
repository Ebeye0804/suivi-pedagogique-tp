<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
use Inertia\Inertia;


class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $enseignants = Enseignant::with('etudiants')->get();
        return inertia('Enseignants', [
            'enseignants' => $enseignants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('EnseignantsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string|max:50',
            'nom'       => 'required|string|max:100',
            'prenom'    => 'required|string|max:100',
            'specialite'=> 'required|string|max:100',
        ]);

        Enseignant::create([
            'matricule' => $request->matricule,
            'nom'       => $request->nom,
            'prenom'    => $request->prenom,
            'specialite'=> $request->specialite,
        ]);

        return redirect()->route('enseignants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}

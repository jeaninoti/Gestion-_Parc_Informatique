<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $niveaux=Niveau::all();

        return view('Niveau.index',compact('niveaux'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Niveau.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|unique:niveaux',
            'description' => 'required',
           
        ]);
    
        // Créer un nouveau niveau
        $niveau = new Niveau();
        $niveau->nom = $request->input('nom');
        $niveau->description = $request->input('description');
     
        $niveau->save();
    
        // Rediriger vers la liste des niveaux avec un message de succès
        return redirect()->route('niveau.index')
                         ->with('success', 'Le niveau a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $niveau = Niveau::findOrFail($id);
    return view('Niveau.show', compact('niveau'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $niveau = Niveau::findOrFail($id);
        return view('niveau.edit', compact('niveau'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $request->validate([
        'nom' => 'required|unique:niveaux,nom,'.$id,
        'description' => 'required',
    ]);

    // Récupérer le niveau à mettre à jour
    $niveau = Niveau::findOrFail($id);

    // Mettre à jour les données du niveau
    $niveau->nom = $request->input('nom');
    $niveau->description = $request->input('description');
    $niveau->update();

    // Rediriger vers la liste des niveaux avec un message de succès
    return redirect()->route('niveau.index')
                     ->with('success', 'Le niveau a été mis à jour avec succès.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Récupérer le niveau à supprimer
    $niveau = Niveau::findOrFail($id);

    // Supprimer le niveau
    $niveau->delete();

    // Rediriger vers la liste des niveaux avec un message de succès
    return redirect()->route('niveau.index')
                     ->with('success', 'Le niveau a été supprimé avec succès.');
}
}

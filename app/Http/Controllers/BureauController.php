<?php

namespace App\Http\Controllers;

use App\Models\Bureau;
use App\Models\Niveau;
use Illuminate\Http\Request;

class BureauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $niveaux = Niveau::all();
    $query = Bureau::query();

    if ($request->has('term')) {
        $term = $request->input('term');
        $query->where('numero', 'like', '%' . $term . '%');
    }

    $bureaux = $query->get();

    return view('Bureau.index', compact('bureaux', 'niveaux'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $niveaux=Niveau::all();
       
        return view('Bureau.create',compact(('niveaux')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Valider les données du formulaire
         $request->validate([
            'numero' => 'required',
            'niveau_id' => 'required',
           
        ]);
    
        // Créer un nouveau niveau
        $bureau = new Bureau();
        $bureau->numero= $request->input('numero');
        $bureau->niveau_id = $request->input('niveau_id');
     
        $bureau->save();
    
        // Rediriger vers la liste des niveaux avec un message de succès
        return redirect()->route('bureau.index')
                         ->with('success', 'Le Bureau a été ajouté avec succès.');
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

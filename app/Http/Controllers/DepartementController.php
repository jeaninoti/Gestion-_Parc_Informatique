<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Departements = Departement::all();
        return view('Departement.index', compact('Departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Departement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:departements,nom',
        ]);

        $Departement = Departement::create($request->all());

        return redirect()->route('Departement.index')->with('success', 'Département ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $Departement)
    {
        return view('Departement.show', compact('Departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $Departement)
    {
        return view('Departement.edit', compact('Departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $Departement)
    {
        $request->validate([
            'nom' => 'required|unique:departements,nom,'.$Departement->id,
        ]);

        $Departement->update($request->all());

        return redirect()->route('Departement.index')->with('success', 'Département mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $Departement)
    {
        $Departement->delete();

        return redirect()->route('Departement.index')->with('success', 'Département supprimé avec succès');
    }
}

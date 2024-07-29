<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(6);
        return view('users.index',compact('users'))->with('i',(\request()->input('page',1)-1)*6);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',
            'image_path'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        User::create($request->all());
        if ($request->hasFile('image_path')) {
            $filenameWithExt = $request->file('image_path')->getClientOriginalName ();// Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);// Get just Extension
            $extension = $request->file('image_path')->getClientOriginalExtension();// Filename To store
            $fileNameToStore = $filename . '_'. time().'.'.$extension;// Upload Image
            $path = $request->file('image_path')->storeAs('public/img/users', $fileNameToStore);
        }// Else add a dummy image
        else {
            $fileNameToStore = 'user.jpg';
        }
        return redirect()->route('users.index')->with('success', 'Utilisateur ajouter avec succes');
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
        return view('users.edit', compact('user'));
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

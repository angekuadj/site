<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\User;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $es = Classe::find(1);
        // $ess = $es->etudiants;
        // dd($ess);
        $etu = Etudiant::all();
        $cla = Classe::all();
        $fi = Filiere::all();
        return view('Etudiant.index', compact('etu','cla','fi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        $etu = Etudiant::all();
        $cla = Classe::all();
        $fi = Filiere::all();
        $user = User::all();
        return view('Etudiant.create', compact('etu','cla','fi','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'classe_id' => 'required',
            'filiere_id' => 'required',
            'DN' => 'required',
            'sexe' => 'required',
            'contact' => 'required',
            'contactP' => 'required',
            'matricule'=>'required'

        ]);
    
        Etudiant::create($request->all());
     
        return redirect()->route('Etudiant.index')
                        ->with('success','Etudiant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Cour;
use App\Models\Day;
use App\Models\Etu_Classe;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Prof;
use Illuminate\Http\Request;

class Etu_ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cour = Cour::all();
        $cla = Classe::all();
        $fi = Filiere::all();
        return view('Classe_etu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cla = Classe::all();
        $fi = Filiere::all();
        $prof = Prof::all();
        $se = Day::all();
        $etu = Etudiant::all();
        return view('Classe_etu.create', compact('cla','etu'));
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
            'classe_id' => 'required',
            'etudiant_id' => 'required',
        ]);
    
        Etu_Classe::create($request->all());
     
        return redirect()->route('Classe_etu.index')
                        ->with('success','okok created successfully.');
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

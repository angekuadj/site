<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $note = Note::all();
        $ma = Matiere::all();
        $classe = Classe::find(1);
        $etudiant = $classe->notes;
        $classe2 = Classe::find(2);
        $etudiant2 = $classe2->notes;
        //dd($etudiant);
        $ma1 = Matiere::find(1);
        $ma2 = Matiere::find(2);
        $ma3 = Matiere::find(3);
        $ma4 = Matiere::find(4);
        $ma5 = Matiere::find(5);
        $ma6 = Matiere::find(6);
        $ma7 = Matiere::find(7);
        $ma8 = Matiere::find(8);
        
        return view('Note.index', compact('note','ma1','ma2','ma3','ma4','ma5','ma6','ma7','ma8','etudiant','etudiant2','ma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cl = Classe::all();
        $ma = Matiere::all();
        $ma1 = Matiere::find(1);
        $ma2 = Matiere::find(2);
        $ma3 = Matiere::find(3);
        $ma4 = Matiere::find(4);
        $ma5 = Matiere::find(5);
        $ma6 = Matiere::find(6);
        $ma7 = Matiere::find(7);
        $ma8 = Matiere::find(8);
        $etu = Etudiant::all();
        return view('Note.create',compact('ma','cl','etu','ma1','ma2','ma3','ma4','ma5','ma6','ma7','ma8'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ma1 = Matiere::find(1);
        $ma2 = Matiere::find(2);
        $ma3 = Matiere::find(3);
        $ma4 = Matiere::find(4);
        $ma5 = Matiere::find(5);
        $ma6 = Matiere::find(6);
        $ma7 = Matiere::find(7);
        $ma8 = Matiere::find(8);
        
        $request->validate([
            'examen' => 'required',
            'note1' => 'required',
            'note2' => 'required',
            'note3' => 'required',
            'note4' => 'required',
            'note5' => 'required',
            'note6' => 'required',
            'note7' => 'nullable',
            'note8' => 'nullable',
            'note9' => 'nullable',
            'note10' => 'nullable',
            'note11' => 'nullable',
            'note12' => 'nullable',
            'note13' => 'nullable',
            'classe_id'=> 'required',
            'etudiant_id'=>'required'
            
        ]);
    
        Note::create($request->all());
     
        return redirect()->route('Note.index',compact('ma1','ma2','ma3','ma4','ma5','ma6','ma7','ma8'))
                        ->with('success','Classe created successfully.');
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

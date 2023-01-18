<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//      public function __construct()
// {
//     $this->middleware(['role:Admin','permission:publish classes|create classes']);
// }

    public function index()
    {
        $this->middleware(['role:Admin']);

        $classe = Classe::all();
        $salle = Salle::all();
        $classes = Classe::all();
        
        //dump($countC);
       // dump($classe);
        return view('Classe.index',compact('classe','salle'))->with('classes', $classes);
        $countC= DB::table('classes')->count();
        return view('dashboard',compact('classe','salle','countC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Classe.create');
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
            'nom' => 'required',
        ]);
    
        Classe::create($request->all());
     
        return redirect()->route('Classe.index')
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
        $classe = Classe::find($id);
        $classes = Classe::all();
        return view('Classe.edit',compact('classes'))->with('classes', $classe);
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
            $classe = Classe::find($id);
            $input = $request->all();
            $classe->update($input);
            return redirect('Classe')->with('flash_message', 'Classe Updated!');  
       
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

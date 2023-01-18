<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\Produit;
use App\Models\Typepaiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Typepaiement::all();
        $Pa = Paiement::all(); 
        return view('Evenement.reçu', compact('Pa','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paiements = Paiement::all();
        $produits = Produit::find($id);
        $type = Typepaiement::all();
        return view('Evenement.acheter',compact('paiements','type'))->with('produits', $produits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        //dd($input);
        Paiement::create($input);
        // $request->validate([
        //     'typepaiement_id' => 'required',
        //     'produit_id' => 'required',
        //     'numero' => 'required',
        // ]);
        // dd($request);
    
        // Paiement::create($request->all());
        
        $type = Typepaiement::all();
        return redirect('Evenement.reçu',compact('type'))->with('flash_message', 'Paiement effectué!');  
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

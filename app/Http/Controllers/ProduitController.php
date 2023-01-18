<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\Produit;
use App\Models\Typepaiement;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Typepaiement::all();
        $produit = Produit::all();
        return view('Evenement.produit',compact('produit','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produit.create'); 
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
            'Dd' => 'required',
            'Df' => 'required',
            'description' => 'required',
            'prix' => 'required',

        ]);
    
        Produit::create($request->all());
     
        return redirect()->route('produit.index')
                        ->with('success','Evenement created successfully.');
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
        $type = Typepaiement::all();
        $produits = Produit::find($id);
        $produit = Produit::find($id);
        return view('Evenement.acheter', compact('produit','type'))->with('produits', $produits);
    }

    public function achete($id)
    {

        $type = Typepaiement::all();
        $produits = Produit::find($id);
        return view('Evenement.acheter',compact('type'))->with('produits', $produits);
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
        $produit = Produit::find($id);
        $paiement = Paiement::all();
        dd($produit);
        $input = $request->all();
        $paiement->create($input);
        return redirect('Evenement.reçu',compact('produit','paiement'))->with('flash_message', 'Paiement Updated!'); 
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

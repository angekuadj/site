<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Prof;
use App\Models\Salle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $countC= Classe::all();
        $c = $countC->count();
        $et = User::all();
        $e =$et->count();
        $sa = Salle::all();
        $s =$sa->count();
        $p =Prof::all()->count();

        //dd($c);
        //dump($countC);
       // dump($classe);
        return view('Dashboard',compact('countC','c','e','s','p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countC= DB::table('classes')->count();
        //dump($countC);
       // dump($classe);
        return view('Dashboard',compact('countC'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $countC= DB::table('classes')->count();
        
        //dump($countC);
       // dump($classe);
        return view('Dashboard',compact('countC'));
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

    public function view($id)
    {
       
        $countC= DB::table('classes')->count();
        //dump($countC);
       // dump($classe);
        return view('Dashboard',compact('countC'));
    }
}

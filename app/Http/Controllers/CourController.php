<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Cour;
use App\Models\Day;
use App\Models\Filiere;
use App\Models\Prof;
use App\Models\Salle;
use App\Models\Semaine;
use App\Models\User;
use CreateCoursTable;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use PDF;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sa = Salle::all();
        $cour = Cour::all();
        $cla = Classe::all();
        $fi = Filiere::all();
        return view('Cour.index',compact('cour','cla','fi','sa'));
    }

    // public function createPDF() {
    //     // retreive all records from db
    //     $data = Cour::all();
    //     // share data to view
    //     view()->share('employee',$data);
    //     $pdf = PDF::loadView('pdf_view', $data);
    //     // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    //   }

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
        $sa = Salle::all();
        return view('Cour.create',compact('cla','fi','prof','se','sa'));
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
            'classe_id' => 'required',
            'filiere_id' => 'required',
            'Dd' => 'required',
            'Df' => 'required',
            'day_id' => 'required',
            'prof_id' => 'required',
            'salle_id' => 'required',
        ]);
    
        Cour::create($request->all());
       
        return redirect()->route('Cour.index')
                        ->with('success','Prof created successfully.');
                      
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

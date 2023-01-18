<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Cour;
use App\Models\Day;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalendrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $class = $user->classe;
        dd($class);
        $classe = Classe::find(1);
        $cours = $classe->cours;
        $classe2 = Classe::find(2);
        $cours2 = $classe2->cours;
        //dd($classe);
       // dd($cours2);
        $time = Time::all();
        $day = Day::all();
        $cour = Cour::all();
        $Fclasse = Cour::where('classe_id',1)->get();
       // dd($Fclasse);
       $cl = Cour::all('classe_id');

       $et = DB::table('cours')->where('user_id', Auth::user()->id)->get(); 

        return view('Calendrier', compact('et','time','day','cour','Fclasse','cl','cours','cours2','classe','classe2'));
    }


    // public function createPDF() {
    //     // retreive all records from db
    //     $data = ::all();
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
        //
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

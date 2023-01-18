<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $permission = Permission::all();
        // return view('Auth.login',compact('user'));
        return view('users.index', compact('user','permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::all();
        $role = Role::all();
        return view('users.create', compact('role','permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = Permission::all();
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'classe_id' => 'nullable',
            'filiere_id' => 'nullable',
            'DN' => 'nullable',
            'sexe' => 'nullable',
            'contact' => 'nullable',
            'contactP' => 'nullable',
            'matricule'=>'nullable'

        ]);
        //dd($request);
            User::create($request->all());
            
     
            return redirect()->route('users.index')
                            ->with('success','User created successfully.');
        
        
      
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
        $permission = Permission::all();
        $user = User::find($id);
        $users = User::all();
        $role = Role::all();
        return view('users.edit',compact('users','role','permission'))->with('users', $user);
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
        $permission = Permission::all();
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        //dd($user);
        return redirect('user')->with('flash_message', 'User Updated!');  


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

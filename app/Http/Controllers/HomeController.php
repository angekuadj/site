<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('dashboard',compact('notifications'));
    }
    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
    public function destroy()
    {
        // ddd('log the use out');
        auth()->logout();

        return redirect('/')->with('success', 'you\'re out');
    }

public function profileUpdate(Request $request){
    $request->validate([
        'name' =>'required|min:4|string|max:255',
        'email'=>'required|email|string|max:255',
        'photo'=>'required|email|string|max:255',

    ]);
    $user =Auth::user();
    $user->name = $request['name'];
    $user->email = $request['email'];
    $user->photo = $request['photo'];
    $user->save();
    return back()->with('message','Profile Updated');
}

}

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
        return view('template');
    }
    // public function username() {
    //     return 'username';
    // }
    public function authenticate(Request $request)
    {
        dd($request->all());
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->route('template');
        }else{
            return redirect()->route('/');
        }
    }
}

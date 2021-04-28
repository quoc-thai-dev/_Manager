<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

class LoginController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect('/');
            }else{
                // dd('hello');
                // return redirect('/login')->withInput()->withErrors(['msg'=>'Email hoặc mật khẩu không đúng!']);
                $request->session()->flash('error', 'Sai tên đăng nhập hoặc mật khẩu');
                return redirect('/login')->withInput();
            }
            return back()->withInput();
        }
        return view('auth.login');
    }
    public function logout(){
        if(Auth::logout()){
            return redirect()->route('login');
        };
        return redirect('/');
    }
}


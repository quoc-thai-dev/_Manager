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
            if(is_numeric($request->username)){
                $field = 'phone';
            } elseif (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
                $field = 'email';
            } else {
                $field = 'username';
            }
            // dd($field);
            if(Auth::attempt([$field => $request->username, 'password' => $request->password])){
                return redirect('/');
            }else{
                // dd('hello');
                // return redirect('/login')->withInput()->withErrors(['msg'=>'Email hoặc mật khẩu không đúng!']);
                $request->session()->flash('error', 'Sai tên đăng nhập hoặc mật khẩu! <br> Vui lòng kiểm tra lại');
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


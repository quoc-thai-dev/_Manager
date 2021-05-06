<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Users;
use Auth;

class ProfileController extends Controller
{
    //
    public function index(){
        $json = file_get_contents(public_path().'/assets/json/localLocationVN.json');
        $dataLocation = json_decode($json, true);

        return view('profile.index',['dataLocation'=>$dataLocation]);
    }
    public function updateProfile(Request $request){
        if(isset(Auth::user()->username)){
            $_exists= Users::where('username',Auth::user()->username)->count();
            $arr=$request->toArray();
            unset($arr["username"]);
            if($_exists){
                $_check=Users::where('username',Auth::user()->username)->update($arr);
                if($_check){
                    return SUCCESS('Cập nhật thành công!');
                }
            }
        }
        return FAIL('Cập nhật thất bại! ');
    }
}

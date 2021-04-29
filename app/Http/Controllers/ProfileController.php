<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ProfileController extends Controller
{
    //
    public function index(){
        $json = file_get_contents(public_path().'/assets/json/localLocationVN.json');
        $dataLocation = json_decode($json, true);
        return view('profile.index',['dataLocation'=>$dataLocation]);
    }
}

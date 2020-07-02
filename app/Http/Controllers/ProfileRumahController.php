<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rumah;

class ProfileRumahController extends Controller
{
    //
    public function index(){
        $data=Rumah::all();
        return view('menu.home',compact('data'));
    }
}

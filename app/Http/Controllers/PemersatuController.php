<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Input;


class PemersatuController extends Controller
{
    public function index(){
        $input = Input::all();
        // $product = Product::all();
        return view('menu.product', compact('input'));
    }
}

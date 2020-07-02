<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class UserClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('menu.clients', compact('clients'));
    }
}

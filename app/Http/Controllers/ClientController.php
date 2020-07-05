<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $product = Product::all();
        return view('admin.clients.create', compact('clients','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name_client' => 'required',
            'location' => 'required',
            'age' => 'required',
            'date_production' => 'required',
            'deskripsi' => 'required|max:900',
            // 'fee' => 'required',
            'img_client' => 'image|max:4024'
        ]);

       
        $validateData['img_client'] = $request->file('img_client')->store(
            'asset/client',
            'public'
        );
        $client = Client::create($validateData);
        $client->product()->attach($request->product);
        $request->session()->flash('added', "Client {$validateData['name_client']} has been successfully added");
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        Storage::delete('public/'.$client->img_client);
        return redirect()->route('client.index')->with('delete', "Client name $client->name_client has been successfully removed");
    }
}

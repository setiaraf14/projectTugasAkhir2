<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputs = Input::all();
        return view('admin.input.index', compact('inputs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.input.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
        'product_id' => 'required',
        'gambar_product' => 'image|max:2000',
        'harga' => 'required'
        ]);
        $validateDate['gambar_product'] = $request->file('gambar_product')->store('asset/product','public');
        Input::create($validateDate);
        $request->session()->flash('pesan', "Data {$validateDate['product_id']} Simpan ");
        return redirect()->route('input.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function show(Input $input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function edit(Input $input)
    {
        $products = Product::all();
        return view('admin.input.edit', [
            'input' => $input,
            'products' => $products
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Input $input)
    {
        $validateDate = $request->validate([
            'product_id' => 'required',
            'gambar_product' => 'image|max:2000',
            'harga' => 'required'
            ]);
        // $input->product_id = $validatedDate['product_id'];
        $dataId = $input->find($input->id);
        $data = $request->all();
        if($request->gambar_product){
            Storage::delete('public/'.$dataId->gambar_product);
            $data['gambar_product'] = $request->file('gambar_product')->store('asset/product','public');
        }
        // $input->harga = $validatedDate['harga'];
        // $input->save();
        $dataId->update($data);
        // $input->update($validateDate);
        return redirect()->route('input.index',['input'=>$input->product_id])->with('pesan',"update data {$validateDate['product_id']} Berhasil ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function destroy(Input $input)
    {
        Storage::delete('public/'.$input->gambar_product);
        $input->delete();
        return redirect()->route('input.index')->with('pesan',"Hapus data $input->product_id Berhasil");
    }
}

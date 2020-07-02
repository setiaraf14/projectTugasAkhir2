<?php

namespace App\Http\Controllers;

use App\Rumah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Rumah::all();
        return view('admin.rumah.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function show(Rumah $rumah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function edit(Rumah $rumah)
    {
        //
        return view('admin.rumah.edit',compact('rumah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rumah $rumah)
    {
        //
        $validateData=$request->validate([
            'nama_perusahaan'=>'required',
            'moto_perusahaan'=>'required',
            'desk_perusahaan'=>'required',
            'visi_perusahaan'=>'required',
            'misi_perusahaan'=>'required',
            'logo_perusahaan'=>'file|image|max:2048',
            'alamat_perusahaan'=>'required',
        ]);
        $dataId=$rumah->findOrFail($rumah->id);
        $data=$request->all();
        if($request->logo_perusahaan){
            Storage::delete('public/'.$dataId->logo_perusahaan);
            $data['logo_perusahaan']=$request->file('logo_perusahaan')->store('asset/home','public');
        }
        $dataId->update($data);
        
        return redirect()->route('rumah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rumah $rumah)
    {
        //
    }
}

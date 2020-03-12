<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Config::where('id','1')->get();
        return view('pages.admin.pengaturan',compact('data'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Config::where('id','1')->get();
        return view('pages.admin.edit_pengaturan',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Config::where('id','1')->first();
        $data->nama_perusahaan = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->email = $request->email;
        $data->telepon = $request->telepon;
        $data->kota = $request->kota;
        $data->alamat = $request->alamat;
        $data->kota = $request->kota;
        $data->kode_pos = $request->kodepos;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->save();
        return redirect('/administrator/pengaturan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

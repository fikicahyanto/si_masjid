<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_list = Kategori::orderBy('id','asc')->where('deleted','0')->paginate(5);
        $jumlah_kategori = $kategori_list->count();
        return view('pages.admin.kategori',compact('kategori_list','jumlah_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.form_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create($request->all());
        return redirect('/administrator/kategori');
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
    public function edit($id)
    {
       $data = Kategori::where('id',$id)->get();
       return view('pages.admin.edit_kategori',compact('data'));
   }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
   {
    $data = Kategori::where('id',$id)->first();
    $data->kategori = $request->kategori;
    $data->save();
    return redirect('/administrator/kategori');
}

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
   {
    $hapus = Kategori::find($id);
    $hapus->deleted = '1';
    $hapus->save();
        // // $hapus->delete();
    return redirect('/administrator/kategori');
}
}

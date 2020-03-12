<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


use App\Kategori;
use App\Gallery;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Gallery::all()->where('deleted','0');
      return view('pages.admin.galleries' , compact('data'));
      // return view('pages.admin.gallery',compact('data'));
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $list_kategori = Kategori::all()->where('deleted','0');
       $jumlah_kategori =$list_kategori->count();
       return view('pages.admin.add_galleries' ,compact('list_kategori','jumlah_kategori'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
        $file = array('gambar'=> Input::file('gambar'));

        if (Input::file('gambar')->isValid()) {
            $destinationPath = 'uploads/gallery';
            $extension = Input::file('gambar')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('gambar')->move($destinationPath,$fileName) ;
            $input['gambar']= $destinationPath.'/'.$fileName;
            Gallery::create($input);
            return redirect('/administrator/gallery
                ');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Gallery::find($id);
        $hapus->deleted = '1';
        $hapus->save();
        // // $hapus->delete();
        return redirect('/administrator/gallery');
    }
}

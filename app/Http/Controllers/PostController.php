<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Blog;
use App\Log;
use App\Kategori;
// use Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth', ['only' => ['create','store','edit','destroy']]);
    }
    
    public function index()
    {
        $post_list = Blog::orderBy('id','asc')->where('deleted','0')->Paginate(5);
        $jumlah_post = $post_list->count();
        return view('pages.admin.post',compact('post_list' , 'jumlah_post'));    
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
        return view('pages.admin.add_post',compact('list_kategori','jumlah_kategori'));
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
            $destinationPath = 'uploads';
            $extension = Input::file('gambar')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('gambar')->move($destinationPath,$fileName) ;
            $input['gambar']= $destinationPath.'/'.$fileName;
            Blog::create($input);
            
            $insert = new Log;
            $insert->log = 'Admin menambahkan Post Baru yang berjudul ' . $request->judul;
            $insert->save();

            return redirect('/administrator/post');
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
        $data = Blog::where('id',$id)->get();
        $list_kategori = Kategori::all();
        $jumlah_kategori =$list_kategori->count();
        return view('pages.admin.edit_post',compact('list_kategori','jumlah_kategori','data'));

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
        $data = Blog::where('id',$id)->first();

        if (Input::hasFile('gambar')) {
            $destinationPath = 'uploads';
            $extension = Input::file('gambar')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('gambar')->move($destinationPath,$fileName) ;
            $input['gambar']= $destinationPath.'/'.$fileName;
            $data->gambar = $input['gambar'];
        }else{
            $data->gambar = $data->gambar;
        }

        $insert = new Log;
        $insert->log = 'Admin mengedit Post yang memiliki id : ' . $id;
        $insert->save();

        $data->judul = $request->judul;
        $data->konten = $request->konten;
        $data->kategori_id = $request->kategori_id;
        $data->save();
        return redirect('/administrator/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {


        $hapus = Blog::find($id);
        $hapus->deleted = '1';
        $hapus->save();
        
        $insert = new Log;
        $insert->log = 'Admin menghapus Post yang memiliki id : ' . $id;
        $insert->save();

        // // $hapus->delete();
        return redirect('/administrator/post');
    }
}

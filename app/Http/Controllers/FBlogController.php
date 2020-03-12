<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Blog;
use App\Komentar;
use App\Config;

class FBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_list = Blog::orderBy('created_at','desc')->where('deleted','0')->Paginate(5);
        $config = Config::all()->where('id','1');
        return view('pages.frontend.blog',compact('post_list' , 'config'));
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
        Komentar::create($request->all());
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_list = Blog::orderBy('created_at','desc')->where('deleted','0')->Paginate(5);
        $data = Blog::all()->where('id',$id);
        $config = Config::all()->where('id','1');
        $komen = Komentar::all()->where('blog_id',$id)->where('status','0');
        $jumlah_komen = $komen->count();        
        
        return view('pages.frontend.detail',compact('data','post_list','komen','jumlah_komen' ,'config'));
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
        //
    }
}

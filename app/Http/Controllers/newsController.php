<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use File;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = News::all();
        if ($stat) {
            $msg = "Data Berhasil Diambil";
            return view('admin.tbnews', compact('stat'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formpost.tbnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request -> file('gambar');
        $file_name = $request -> file('gambar') -> getClientOriginalName();
        $path = public_path("/img/News/");
        $file -> move($path, $file_name);

        $stat = News::insert([
            "header" => $request -> header,
            "subtitle" => $request -> subtitle,
            "deskripsi" => $request -> deskripsi,
            "created_by" => $request -> created_by,
            "gambar" => $file_name,
            "kategori" => $request -> kategori,
        ]);

        if ($stat) {
            $msg = "Penambahan Data Berhasil!";
            return redirect('/admin/news');
        } else {
            return "Penambahan Data Gagal!";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $stat = News::all();
        if ($stat) {
            return $stat;
        } else {
            return "Pengambilan Data Gagal!";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stat = News::find($id);
        if ($stat) {
            return view('admin.formedit.tbnews', compact('stat'));
        }
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
        $gambar = News::find($id);
        File::delete('img/News/' . $gambar -> gambar);

        $file = $request -> file('gambar');
        $file_name = $request -> file('gambar') -> getClientOriginalName();
        $path = public_path("/img/News/");
        $file -> move($path, $file_name);

        $stat = News::find($id) -> update([
            "header" => $request -> header,
            "subtitle" => $request -> subtitle,
            "deskripsi" => $request -> deskripsi,
            "created_by" => $request -> created_by,
            "kategori" => $request -> kategori,
            "gambar" => $file_name
        ]);

        if ($stat) {
            $msg = "Pengubahan Data User Berhasil!";
            return redirect('/admin/news');
        } else {
            return "Pengubahan Data User Gagal!";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = News::find($id);
        File::delete('img/News/' . $gambar -> gambar);
        
        $stat = News::find($id) -> delete();

        if ($stat) {
            $msg = "Penghapusan Data Berhasil!";
            return redirect('/admin/news');
        } else {
            return "Penghapusan Data Gagal!";
        }
    }
}

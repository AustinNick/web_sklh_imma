<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use File;

class jurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = Jurusan::all();
        if ($stat) {
            return view('admin.tbjurusan', compact('stat'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formpost.tbjurusan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request -> file('logo');
        $file_name = $request -> file('logo') -> getClientOriginalName();
        $path = public_path("img/Jurusan/");
        $file -> move($path, $file_name);

        $stat = Jurusan::insert([
            "jurusan" => $request -> jurusan,
            "deskripsi" => $request -> deskripsi,
            "logo" => $file_name
        ]);

        if ($stat) {
            $msg = "Penambahan Data Berhasil!";
            return redirect('/admin/jurusan');
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
        $stat = Jurusan::all();
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
        $stat = Jurusan::find($id);
        return view('admin.formedit.tbjurusan', compact('stat'));
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
        $gambar = Jurusan::find($id);
        File::delete('img/Jurusan/' . $gambar -> logo);

        $file = $request -> file('logo');
        $file_name = $request -> file('logo') -> getClientOriginalName();
        $path = public_path("/img/Jurusan/");
        $file -> move($path, $file_name);

        $stat = Jurusan::find($id) -> update([
            "jurusan" => $request -> jurusan,
            "deskripsi" => $request -> deskripsi,
            "logo" => $file_name
        ]);

        if ($stat) {
            $msg = "Pengubahan Data User Berhasil!";
            return redirect('/admin/jurusan');
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
        $gambar = Jurusan::find($id);
        File::delete('img/Jurusan/' . $gambar -> logo);
        
        $stat = Jurusan::find($id) -> delete();

        if ($stat) {
            $msg = "Penghapusan Data Berhasil!";
            return redirect('/admin/jurusan');
        } else {
            return "Penghapusan Data Gagal!";
        }
    }
}

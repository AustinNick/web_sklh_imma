<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekskul;
use File;

class ekskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = Ekskul::all();
        if ($stat) {
            return view('admin.tbekskul', compact('stat'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formpost.tbekskul');
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
        $path = public_path("/img/Ekskul/");
        $file -> move($path, $file_name);

        $stat = Ekskul::insert([
            "nama_ekskul" => $request -> nama_ekskul,
            "deskripsi" => $request -> deskripsi,
            "gambar" => $file_name
        ]);

        if ($stat) {
            $msg = "Penambahan Data Berhasil!";
            return redirect('/admin/ekskul');
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
        $stat = Ekskul::all();
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
        $stat = Ekskul::find($id);
        return view('admin.formedit.tbekskul', compact('stat'));
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
        $gambar = Ekskul::find($id);
        File::delete('img/Ekskul/' . $gambar -> gambar);

        $file = $request -> file('gambar');
        $file_name = $request -> file('gambar') -> getClientOriginalName();
        $path = public_path("/img/Ekskul/");
        $file -> move($path, $file_name);

        $stat = Ekskul::find($id) -> update([
            "nama_ekskul" => $request -> nama_ekskul,
            "deskripsi" => $request -> deskripsi,
            "gambar" => $file_name
        ]);

        if ($stat) {
            $msg = "Pengubahan Data User Berhasil!";
            return redirect('/admin/ekskul');
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
        $gambar = Ekskul::find($id);
        File::delete('img/Ekskul/' . $gambar -> gambar);

        $stat = Ekskul::find($id) -> delete();

        if ($stat) {
            $msg = "Penghapusan Data Berhasil!";
            return redirect('/admin/ekskul');
        } else {
            return "Penghapusan Data Gagal!";
        }
    }
}

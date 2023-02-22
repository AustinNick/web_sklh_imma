<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryaS;
use File;

class karyasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = KaryaS::all();
        return view('admin.tbkaryasiswa', compact('stat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formpost.tbkaryasiswa');
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
        $path = public_path("/img/Karya Siswa/");
        $file -> move($path, $file_name);

        $stat = KaryaS::insert([
            "judul_proyek" => $request -> judul_proyek,
            "anggota" => $request -> anggota,
            "gambar" => $file_name,
            "link_proyek" => $request -> link_proyek,
            "kategori" => $request -> kategori
        ]);

        if ($stat) {
            $msg = "Penambahan Data Berhasil!";
            
            return redirect('/admin/karyasiswa');
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
        $stat = KaryaS::all();
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
        $stat = KaryaS::find($id);
        return view('admin.formedit.tbkaryasiswa', compact('stat'));
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
        $gambar = KaryaS::find($id);
        File::delete('img/Karya Siswa/' . $gambar -> gambar);

        $file = $request -> file('gambar');
        $file_name = $request -> file('gambar') -> getClientOriginalName();
        $path = public_path("/img/Karya Siswa/");
        $file -> move($path, $file_name);

        $stat = KaryaS::find($id) -> update([
            "judul_proyek" => $request -> judul_proyek,
            "anggota" => $request -> anggota,
            "gambar" => $file_name,
            "link_proyek" => $request -> link_proyek,
            "kategori" => $request -> kategori
        ]);

        if ($stat) {
            $msg = "Pengubahan Data User Berhasil!";
            return redirect('/admin/karyasiswa');
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
        $gambar = KaryaS::find($id);
        File::delete('img/Karya Siswa/' . $gambar -> gambar);

        $stat = KaryaS::find($id) -> delete();

        if ($stat) {
            $msg = "Penghapusan Data Berhasil!";
            return redirect('/admin/karyasiswa');
        } else {
            return "Penghapusan Data Gagal!";
        }
    }
}

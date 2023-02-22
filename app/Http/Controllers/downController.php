<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownL;
use App\Models\Mapel;
use File;

class downController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = DownL::all();
        if ($stat) {
            return view('admin.tbdownload', compact('stat'));
        } else {
            return "Data Tidak Ditemukan";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::all();
        return view('admin.formpost.tbdownload', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request -> file('nama_file');
        $file_name = $request -> file('nama_file') -> getClientOriginalName();
        $path = public_path("/file/");
        $file -> move($path, $file_name);

        $stat = DownL::insert([
            "judul" => $request -> judul,
            "nama_file" => $file_name,
            "deskripsi" => $request -> deskripsi,
            "kode_mapel" => $request -> kode_mapel,
        ]);

        if ($stat) {
            $msg = "Penambahan Data Berhasil!";
            return redirect('/admin/download');
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
        $stat = DownL::all();
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
        $stat = DownL::find($id);
        $mapel = Mapel::all();
        return view('admin.formedit.tbdownload', compact('stat', 'mapel'));
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
        $file = DownL::find($id);
        File::delete('file/' . $file -> nama_file);

        $file = $request -> file('nama_file');
        $file_name = $request -> file('nama_file') -> getClientOriginalName();
        $path = public_path("/file/");
        $file -> move($path, $file_name);

        $stat = DownL::find($id) -> update([
            "judul" => $request -> judul,
            "nama_file" => $file_name,
            "deskripsi" => $request -> deskripsi,
            "kode_mapel" => $request -> kode_mapel
        ]);

        if ($stat) {
            $msg = "Pengubahan Data Berhasil!";
            return redirect('/admin/download');
        } else {
            return "Pengubahan Data Gagal!";
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
        $file = DownL::find($id);
        File::delete('file/' . $file -> nama_file);

        $stat = DownL::find($id) -> delete();
        
        if ($stat) {
            $msg = "Penghapusan Data Berhasil!";
            return redirect('/admin/download');
        } else {
            return "Penghapusan Data Gagal!";
        }
    }
}

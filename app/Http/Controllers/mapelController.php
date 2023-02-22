<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use File;

class mapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = Mapel::all();
        if ($stat) {
            return view('admin.tbmapel', compact('stat'));
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
        return view('admin.formpost.tbmapel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stat = Mapel::insert([
            "kodemapel" => $request -> kodemapel,
            "mapel" => $request -> mapel,
            "id_guru" => $request -> id_guru,
        ]);

        if ($stat) {
            $msg = "Penambahan Data Berhasil!";
            return redirect('/admin/mapel');
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
        $stat = Mapel::all();
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
        $stat = Mapel::find($id);
        return view('admin.formedit.tbmapel', compact('stat'));
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
        $stat = Mapel::find($id) -> update([
            "mapel" => $request -> mapel,
            "id_guru" => $request -> id_guru,
        ]);

        if ($stat) {
            $msg = "Pengubahan Data Berhasil!";
            return redirect('/admin/mapel');
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
        $stat = Mapel::find($id) -> delete();
        if ($stat) {
            $msg = "Penghapusan Data Berhasil!";
            return redirect('/admin/mapel');
        } else {
            return "Penghapusan Data Gagal!";
        }
    }
}

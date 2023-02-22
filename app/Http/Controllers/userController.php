<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Jurusan;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = Users::all();
        if ($stat) {
            return view('admin.tbuser', compact('stat'));
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
        $jurusan = Jurusan::all();
        return view('admin.formpost.tbuser', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stat = Users::insert([
            "iduser" => $request -> iduser,
            "nisn" => $request -> nisn,
            "nama" => $request -> nama,
            "kelas" => $request -> kelas,
            "jurusan" => $request -> jurusan,
            "alamat" => $request -> alamat,
            "telp" => $request -> telp,
            "email" => $request -> email,
            "angkatan" => $request -> angkatan,
            "status" => $request -> status,
            "aktif" => $request -> aktif
        ]);

        if ($stat) {
            $msg = "Penambahan Data Berhasil!";
            return redirect('/admin/user');
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
        $stat = Users::all();
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
        $stat = Users::find($id);
        $jurusan = Jurusan::all();
        return view('admin.formedit.tbuser', compact('stat', 'jurusan'));
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
        $stat = Users::find($id) -> update([
            "nisn" => $request -> nisn,
            "nama" => $request -> nama,
            "kelas" => $request -> kelas,
            "jurusan" => $request -> jurusan,
            "alamat" => $request -> alamat,
            "telp" => $request -> telp,
            "email" => $request -> email,
            "angkatan" => $request -> angkatan,
            "status" => $request -> status,
            "aktif" => $request -> aktif
        ]);

        if ($stat) {
            $msg = "Pengubahan Data User Berhasil!";
            return redirect('/admin/user');
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
        $stat = Users::find($id) -> delete();
        if ($stat) {
            $msg = "Penghapusan Data Berhasil!";
            return redirect('/admin/user');
        } else {
            return "Penghapusan Data Gagal!";
        }
    }
}

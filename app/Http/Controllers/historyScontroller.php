<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryS;

class historyScontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = HistoryS::all();

        return view("admin.tbhistorysiswa", compact('stat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.formpost.tbhistorysiswa");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stat = HistoryS::insert([
            "kodeuser" => $request -> kodeuser,
            "tahun" => $request -> tahun,
            "kelas" => $request -> kelas,
            "deskripsi" => $request -> deskripsi,
        ]);

        if ($stat) {
            $stat = "Penambahan Data Berhasil!";
            return redirect("/admin/historysiswa");
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
    public function show($id)
    {
        $stat = HistoryS::all();
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
        $stat = HistoryS::find($id);
        return view('admin.formedit.tbhistorysiswa', compact('stat'));
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
        $stat = HistoryS::find($id) -> update([
            "tahun" => $request -> tahun,
            "kelas" => $request -> kelas,
            "deskripsi" => $request -> deskripsi,
        ]);

        if ($stat) {
            $stat = "Pengubahan Data Berhasil!";
            return redirect("/admin/historysiswa");
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
        HistoryS::find($id) -> delete();
        return redirect("/admin/historysiswa");
    }
}

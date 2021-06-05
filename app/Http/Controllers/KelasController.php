<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('kelas')
        ->leftjoin('guru', 'kelas.id_guru', '=', 'guru.id')
        ->leftjoin('siswa', 'kelas.id_siswa', '=', 'siswa.id')
        ->select('kelas.*', 'siswa.nama as namas', 'guru.nama as namag')
        ->get();
        return view('tampil.kelast' , ['kelas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.newkelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required',
            'id_guru' => 'required',
        ]);

        DB::table('kelas')->insert([
            'id_siswa' => $request->id_siswa,
            'id_guru' => $request->id_guru
        ]);
        // alihkan halaman ke halaman guru
        return redirect()->route('kelas.index')->with('Success','Data Kelas Berhasil Ditambah');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('edita.editkelas', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'id_siswa' => 'required',   
            'id_guru' => 'required',
        ]);

        $kelas->update([
            'id_siswa' => $request->id_siswa,
            'id_guru' => $request->id_guru
        ]);

        // alihkan halaman ke halaman guru
        return redirect()->route('kelas.index')->with('Success','Data Kelas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('kelas.index')->with('Success','Data Kelas Berhasil Dihapus');
    }
}

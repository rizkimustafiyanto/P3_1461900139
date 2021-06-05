<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::All();
        return view('tampil.siswat' , ['siswa' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.newsiswa');
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
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman guru
        return redirect()->route('siswa.index')->with('Success','Data Siswa Berhasil Ditambah');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('edita.editsiswa',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',   
            'alamat' => 'required',
        ]);

        $guru->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        // alihkan halaman ke halaman guru
        return redirect()->route('siswa.index')->with('Success','Data Siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $guru->delete();
        return redirect()->route('siswa.index')->with('Success','Data Siswa Berhasil Dihapus');
    }
}

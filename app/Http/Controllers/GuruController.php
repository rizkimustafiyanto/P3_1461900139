<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Guru;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Models\Guru::All();
        return view('tampil.gurut' , ['guru' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.newguru');
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
            'mengajar' => 'required',
        ]);

        DB::table('guru')->insert([
            'nama' => $request->nama,
            'mengajar' => $request->mengajar
        ]);
        // alihkan halaman ke halaman guru
        return redirect()->route('guru.index')->with('Success','Data Guru Berhasil Ditambah');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        return view('edita.showguru',compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('edita.editguru', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Guru $guru)
    {
        $request->validate([
            'nama' => 'required',   
            'mengajar' => 'required',
        ]);

        $guru->update([
            'nama' => $request->nama,
            'mengajar' => $request->mengajar
        ]);

        // alihkan halaman ke halaman guru
        return redirect()->route('guru.index')->with('Success','Data Guru Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('guru.index')->with('Success','Data Guru Berhasil Dihapus');
    }
}

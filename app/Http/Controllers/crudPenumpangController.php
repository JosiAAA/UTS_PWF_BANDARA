<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class crudPenumpangController extends Controller
{
    public function index()
    {
        //
        $posting = DB::table('penumpang')->get(); // Mengambil semua data
return view('CRUD_penumpang', ['posting' => $posting]);

    }
    public function create()
    {
        return view("tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('penumpang')->insert([
            'nama'=> $request->nama,
            'umur' => $request->umur,
            'telp'=> $request->telp,
            'maskapai'=> $request->maskapai,
            'destinasi' => $request->destinasi,
            'tanggal'=> $request->tanggal,
            'harga'=> $request->harga
           
        ]);

        return redirect('/CRUD_penumpang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posting = DB::table('posts')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['posting' => $posting]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       DB::table("posts")->where("id",$request->id)->update(
[     
        'image'=>'',
        'judul' => $request->judul,
        'content'=> $request->content]
       );
       return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("posts")->where("id",$id)->delete();
        return redirect('/index');
    }

}

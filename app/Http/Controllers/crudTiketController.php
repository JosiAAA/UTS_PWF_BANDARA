<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class crudTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tiketPost = DB::table('tiket')->get(); // Menampilkan 10 data per halaman
    return view('CRUD_tiket', ['tiketPost' => $tiketPost]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tambahTiket");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('tiket')->insert([
            'maskapai'=>$request->maskapai,
            'destinasi' => $request->destinasi,
            'tanggal'=> $request->tanggal,
            'harga'=>$request->harga
        ]);

        return redirect('/CRUD_tiket');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**f
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tiketPost = DB::table('tiket')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editTiket',['tiketPost' => $tiketPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table("tiket")->where("id",$request->id)->update(
            [     
                'maskapai'=>$request->maskapai,
                'destinasi' => $request->destinasi,
                'tanggal'=> $request->tanggal,
                'harga'=>$request->harga]
                   );
                   return redirect('/CRUD_tiket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("tiket")->where("id",$id)->delete();
        return redirect('/CRUD_tiket');
    }
   
}

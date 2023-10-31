<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class crudJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwalPost = DB::table('jadwal')->get(); 
    return view('CRUD_jadwal', ['jadwalPost' => $jadwalPost]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tambahJadwal");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jadwal')->insert([
            'maskapai'=>$request->maskapai,
            'destinasi' => $request->destinasi,
            'tanggal'=> $request->tanggal,
            'jam'=>$request->jam,
            'gate'=>$request->gate
        ]);

        return redirect('/CRUD_jadwal');
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
        $jadwalPost = DB::table('jadwal')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editJadwal',['jadwalPost' => $jadwalPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table("jadwal")->where("id",$request->id)->update(
            [     
                'maskapai'=>$request->maskapai,
                'destinasi' => $request->destinasi,
                'tanggal'=> $request->tanggal,
                'jam'=>$request->jam,
                'gate'=>$request->gate
                ]
                   );
                   return redirect('/CRUD_jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("jadwal")->where("id",$id)->delete();
        return redirect('/CRUD_jadwal');
    }
   
}

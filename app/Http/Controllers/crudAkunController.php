<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class crudAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $akunPost = DB::table('users')->get(); // Menampilkan 10 data per halaman
    return view('CRUD_akun', ['akunPost' => $akunPost]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tambahAkun");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name'=>$request->name,
            'email' => $request->email,
            'role'=> $request->role,
            'password'=>$request->password
        ]);

        return redirect('/CRUD_akun');
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
        $akunPost = DB::table('users')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editAkun',['akunPost' => $akunPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table("users")->where("id",$request->id)->update(
            [     
                'name'=>$request->name,
                'email' => $request->email,
                'role'=> $request->role,
                'password'=>$request->password]
                   );
                   return redirect('/CRUD_akun');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("users")->where("id",$id)->delete();
        return redirect('/CRUD_akun');
    }
   
}

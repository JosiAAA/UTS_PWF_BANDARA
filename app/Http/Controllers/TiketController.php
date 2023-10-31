<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiket;
class TiketController extends Controller
{
    public function index()
    {
    	
    	$tiket = tiket::all();
 
    	return view('tiket', ['tiket' => $tiket]);
    }
}

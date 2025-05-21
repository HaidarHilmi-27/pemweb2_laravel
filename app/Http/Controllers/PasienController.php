<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
class PasienController extends Controller
{
    // public function index()
    // {
    //     $pasiens = pasien::all();
    //     return view('pasien.index',[
    //         'pasiens' => $pasiens,
    //     ]);
    // }

    public function index()
    {
    $pasiens = Pasien::with('kelurahan')->get();
    return view('pasien.index', compact('pasiens'));
    }
}

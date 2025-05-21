<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function show(): View
    {
        $prodi1 = new Prodi("SI", "Sistem Informasi");
        $prodi1->kaprodi = "Misna Asqia M.Kom";

        $prodi2 = new Prodi("TI", "Teknik Informatika");
        $prodi2->kaprodi = "Tifany Nabarian M.TI";

        $prodi3 = new Prodi("BD", "Bisnis Digital");
        $prodi3->kaprodi = "Dr. Amalia Rahmah M.T";

        $ar_prodi = [$prodi1, $prodi2, $prodi3];

        return view('prodi.index', [
            'judul' => 'Daftar Program Studi STT-NF',
            'list_prodi' => $ar_prodi,
        ]);
    }
}

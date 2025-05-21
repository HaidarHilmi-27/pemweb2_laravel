<?php

namespace app\Models;

class Prodi {
    public $kode;
    public $nama;
    public $kaprodi;

    function __construct($kode, $nama){
        $this->kode = $kode;
        $this->nama = $nama;
    }
}
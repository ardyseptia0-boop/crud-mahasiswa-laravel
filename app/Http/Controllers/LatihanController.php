<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        // Logika ini dikembangkan dengan bantuan DeepSeek
        $data = [
            'nama' => 'Mahasiswa STMIK IKMI',
            'mata_kuliah' => 'Pemrograman Web Lanjut'
        ];
        return view('welcome_mahasiswa', $data);
    }
}
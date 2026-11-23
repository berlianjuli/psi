<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarBladeController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Annisa Rahmawati',
            'Bambang Santoso',
            'Cinta Dewi Astuti'
        ];
        return view('belajar', ['mahasiswa' => $mahasiswa]);
    }
}

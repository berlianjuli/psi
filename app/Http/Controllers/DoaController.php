<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoaController extends Controller
{
    public function doa(Request $request)
    {
        $kelas = $request->kelas;
        $name = $request->name;
        return view('doa', ['name' => $name, 'kelas' => $kelas]);
    }
}

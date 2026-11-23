<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function halo(Request $request)
    {
        $name = $request->name;
        return view('halo', ['name' => $name]);
    }
}

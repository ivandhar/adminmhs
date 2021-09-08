<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeview()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);

        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index

        return view('v_home', compact('mahasiswas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

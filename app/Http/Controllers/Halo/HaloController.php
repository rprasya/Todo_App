<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function coba() {
        $nama = 'James';
        // $nama = ['nama' => 'Rinaldi'];
        $data = ['nama' => $nama];
        return view('home', $data);
    }
}

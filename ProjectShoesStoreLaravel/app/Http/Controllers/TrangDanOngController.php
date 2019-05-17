<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangDanOngController extends Controller
{
    public function trangDanOng() {
        return view('page.trangDanOng');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\slides;
use DateTime;
use Illuminate\Support\Facades\DB;

class slidesController extends Controller
{
    public function listSlide()
    {
        return slides::orderBy('id')->get();
    }
}
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = Penyakit::paginate(10);
        return view('user.home', compact('penyakit'));
    }
}

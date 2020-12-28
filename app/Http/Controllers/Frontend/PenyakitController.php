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

    public function cari(Request $request)
    {
        return 'oke';
        $title = $_GET['cari'];
        $penyakit = Penyakit::where([ 
            ['name', 'LIKE', '%' . $title . '%'],
        ])->get();
        // mengirim penyakit pegawai ke view index
        return view('user.search', compact('penyakit'));
    }
}

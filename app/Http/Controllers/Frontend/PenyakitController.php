<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penyakit;

use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = Penyakit::paginate(10);

        $dataid = DB::table('penyakit')->get();

        return view('user.home', compact('penyakit', 'dataid'));
    }

    public function cari(Request $request)
    {
        $title = $_GET['cari'];
        $penyakit = Penyakit::where([ 
            ['name', 'LIKE', '%' . $title . '%'],
            ['ciri_penyakit', 'LIKE', '%' . $title . '%']
            
            ])->get();
        // mengirim penyakit pegawai ke view index
        return view('user.seacrh', compact('penyakit'));
    }

    public function detail(Penyakit $data)
    {
        return view('user.detail', compact('data') );
    }
}

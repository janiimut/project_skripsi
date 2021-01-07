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
        $data = $request->all();
        // var_dump($data);
        $key = $data['cari'];
        $result;
        $result1 = Penyakit::where([ 
            ['name', 'LIKE', '%' . $key . '%'],
            ])->get();
        // return json_encode($result);
        if (sizeof($result1)){
            // return json_encode($result1);
            $result = $result1;
            // var_dump('asas');
        }else{
            // $field = 'solusi_penyakit';

            $result2 = Penyakit::where([ 
                ['solusi_penyakit', 'LIKE', '%' . $key . '%'],
                ])->get();
            if(sizeof($result2)){
                // return json_encode($result2);
                $result = $result2;
            }else{
                $result3 = Penyakit::where([ 
                    ['ciri_penyakit', 'LIKE', '%' . $key . '%'],
                    ])->get();
                // return json_encode($result3);
                $result = $result3;
            }
        }
        
        
        // mengirim penyakit pegawai ke view index
        return view('user.seacrh')->with(['penyakit' => $result]);
        // var_dump($result);
    }

    public function detail(Penyakit $data)
    {
        return view('user.detail', compact('data'));
    }
}

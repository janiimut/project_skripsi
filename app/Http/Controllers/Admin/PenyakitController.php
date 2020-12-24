<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penyakit;
use App\CiriPenyakit;
use App\SolusiPenyakit;
use App\User;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ciripenyakit = DB::table('ciripenyakit')->get();
 
        $penyakits = DB::table('penyakit')->get();

        return view('admin.tampilanadmin.listpenyakit', compact('penyakits'));
    }

    public function editpenyakit()
    {
         $penyakits = DB::table('penyakit')->get();

         return view('admin.tampilanadmin.datapenyakit', compact('penyakits'));
    }
    
    public function ciri($penyakit)
    {
        $ciri= Penyakit::where([
            ['id', 'LIKE', '%' . $penyakit . '%'],
        ])->first();

        return view('admin.tampilanadmin.ciripenyakit', compact('ciri'));
    }
    public function ciriupdate(Request $request, $penyakit )
    {
        dd($penyakit);
        DB::table('ciripenyakit')->where('id', $penyakit)
        ->update([
            'penyakit_id' => $request->penyakit_id,
            'description' => $request->ciri
        ]);
        return 'oke';
    }

    public function editciri($ciri)
    {
        $data = Penyakit::where([
            ['id', 'LIKE', '%' . $ciri . '%'],
        ])->first();
        return view ('admin.tampilanadmin.editciri', compact('data'));
    }

    public function updateciri(Request $request, Penyakit $ciri)
    {
        Penyakit::where('id', $ciri->id)
        ->update([
            'name' => $request->name,
            'ciri_penyakit' => $request->ciri_penyakit,
            'solusi_penyakit' => $request->solusi_penyakit,
        ]);
        return redirect()->route('admin.penyakit');
    }


    public function solusi($penyakit)
    {
        $solusi = Penyakit::where([
            ['id', 'LIKE', '%' . $penyakit . '%'],
        ])->first();
        return view('admin.tampilanadmin.solusipenyakit', compact('solusi'));
    }

    public function editsolusi($solusi)
    {
        $data = Penyakit::where([
            ['id', 'LIKE', '%' . $solusi . '%'],
        ])->first();
        return view('admin.tampilanadmin.editsolusi', compact('data'));
    }

    public function solusiupdate(Request $request, Penyakit $solusi)
    {
        Penyakit::where('id', $solusi->id)
        ->update([
            'name' => $request->name,
            'ciri_penyakit' => $request->ciri_penyakit,
            'solusi_penyakit' => $request->solusi_penyakit,
        ]);
        return redirect()->route('admin.penyakit');
    }

    public function input()
    {
        return view('admin.tampilanadmin.inputpenyakit');
    }

    public function store(Request $request)
    {
        $data = new Penyakit;
        $data->name = $request->nama;

        if ($request->hasFile('images')){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(100000,1001238912).".".$extension;
            $file->move(public_path('img'), $filename);
            $data->images = $filename;
        }else{
            return $request;
            $data->images;
        }

        $data->ciri_penyakit = $request->ciri;
        $data->solusi_penyakit = $request->solusi; 

        $data->save();

      return redirect()->route('admin.penyakit');
    }

    public function user()
    {
        $datauser = User::all();
        return view('admin.tampilanadmin.datauser', compact('datauser'));
    }

    public function edit(Penyakit $penyakit)
    {
        return view('admin.tampilanadmin.editpenyakit', compact('penyakit'));
    }

    public function patch(Request $request, Penyakit $penyakit)
    {
        Penyakit::where('id', $penyakit->id)
            ->update([
                'name' => $request->name
            ]);

        return redirect()->route('admin.penyakit')->with('status', 'Data berhasil diedit');
    }

    public function destroy($id)
    {
        $data = Penyakit::find($id);

        $data->delete();

        return redirect()->back();
    }
}

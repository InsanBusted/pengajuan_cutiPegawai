<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\PengajuanCuti;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PengajuanCutiController extends Controller
{
    public function index(){
        // fitur pagination
        $max_view = 3;

        // fitur pencarian
        if(request('search')) {
            $pengajuanCuti = PengajuanCuti::where('nip', 'like', '%'.request('search').'%')->paginate($max_view)->withQueryString();
        }else {
            $pengajuanCuti = PengajuanCuti::orderBy('nip')->paginate($max_view);
        }

        $pegawai = Auth::user()->pegawai;
        $pengajuanCuti1 = $pegawai->pengajuanCuti;


        return view('pegawai.pengajuanCuti.index', compact('pengajuanCuti', 'pengajuanCuti1'));
    }

    public function create()    
        {
            $pegawai = Auth::user()->pegawai;
            return view('pegawai.pengajuanCuti.create', compact('pegawai'));
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
            'jumlah' => 'required',
            'ket' => 'required',
            'status' => 'required',
            ]);

        
        $pegawai = Auth::user()->pegawai;   
        
        $data = [
            'tanggal_awal' => $request->input('tanggal_awal'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'jumlah' => $request->input('jumlah'),
            'ket' => $request->input('ket'),
            'status' => $request->input('status'),
            'nip' => $pegawai->nip,
        ];

        PengajuanCuti::create($data);
        return redirect()->route('pengajuanCuti.create')->with('success', 'berhasil simpan data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengajuanCuti = PengajuanCuti::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('pegawai.pengajuanCuti.edit', compact('pengajuanCuti', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
            'jumlah' => 'required',
            'ket' => 'required',
            'status' => 'required',
            ]);

        
        $pegawai = Auth::user()->pegawai;   
        
        $data = [
            'tanggal_awal' => $request->input('tanggal_awal'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'jumlah' => $request->input('jumlah'),
            'ket' => $request->input('ket'),
            'status' => $request->input('status'),
            'nip' => $pegawai->nip,
        ];


        $pengajuanCuti = PengajuanCuti::findOrFail($id);
        $pengajuanCuti->update($data);
        return redirect()->route('pengajuanCuti.edit', $pengajuanCuti->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengajuanCuti = PengajuanCuti::findOrFail($id);
        $pengajuanCuti->delete();
        return redirect('/pegawai/PengajuanCuti')->with('success', 'Berhasil menghapus data!');
    }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\PengajuanCuti;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PengajuanCutiController extends Controller
{
    public function index(){
        // fitur pagination
        $max_view = 3;

        // fitur pencarian
        if(request('search')) {
            $pegawai = PengajuanCuti::where('user_id', 'like', '%'.request('search').'%')->paginate($max_view)->withQueryString();
        }else {
            $pegawai = PengajuanCuti::orderBy('user_id')->paginate($max_view);
        }

        $userPegawai = PengajuanCuti::where('user_id', Auth::user()->id);
        $user = User::all();        

        return view('pegawai.pengajuanCuti.index', compact('pegawai', 'userPegawai', 'user'));
    }

    public function create()    
        {
            return view('pengajuanCuti.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'divisi_id' => 'required',
            'user_id' => 'required',
            ]);

        $data = [
            'gender' => $request->input('gender'),
            'tmp_lahir' => $request->input('tmp_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'telpon' => $request->input('telpon'),
            'alamat' => $request->input('alamat'),
            'divisi_id' => $request->input('divisi_id'),
            'user_id' => $request->input('divisi_id'),
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
        $pegawai = PengajuanCuti::findOrFail($id);
        return view('pengajuanCuti.index', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'divisi_id' => 'required',
            'user_id' => 'required',
            ]);

        $data = [
            'gender' => $request->input('gender'),
            'tmp_lahir' => $request->input('tmp_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'telpon' => $request->input('telpon'),
            'alamat' => $request->input('alamat'),
            'divisi_id' => $request->input('divisi_id'),
            'user_id' => $request->input('divisi_id'),
        ];

        $pegawai = PengajuanCuti::findOrFail($id);
        $pegawai->update($data);
        return redirect()->route('pengajuanCuti.edit', $pegawai->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = PengajuanCuti::findOrFail($id);
        $pegawai->delete();
        return redirect('/pegawai/pengajuanCuti')->with('success', 'Berhasil menghapus data!');
    }
}

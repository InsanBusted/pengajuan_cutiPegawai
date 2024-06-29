<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        // fitur pagination
        $max_view = 3;

        // fitur pencarian
        if(request('search')) {
            $pegawai = Pegawai::where('nip', 'like', '%'.request('search').'%')->paginate($max_view)->withQueryString();
        }else {
            $pegawai = Pegawai::orderBy('nip')->paginate($max_view);
        }

        
        

        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
        {
            return view('pegawai.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|max:20',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'divisi_id' => 'required',
            ],
        [
            'nip.required' => 'Nip Wajib Diisi',
            'nip.max' => 'NIP Maximal 20 Karakter',
        ]);

        $data = [
            'nip' => $request->input('nip'),
            'gender' => $request->input('gender'),
            'tmp_lahir' => $request->input('tmp_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'telpon' => $request->input('telpon'),
            'alamat' => $request->input('alamat'),
            'divisi_id' => $request->input('divisi_id'),
        ];

        Pegawai::create($data);
        return redirect()->route('pegawai.create')->with('success', 'berhasil simpan data');

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
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|max:20',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'divisi_id' => 'required',
            ],
        [
            'nip.required' => 'Nip Wajib Diisi',
            'nip.max' => 'NIP Maximal 20 Karakter',
        ]);

        $data = [
            'nip' => $request->input('nip'),
            'gender' => $request->input('gender'),
            'tmp_lahir' => $request->input('tmp_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'telpon' => $request->input('telpon'),
            'alamat' => $request->input('alamat'),
            'divisi_id' => $request->input('divisi_id'),
        ];

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($data);
        return redirect()->route('pegawai.edit', $pegawai->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('/pegawai')->with('success', 'Berhasil menghapus data!');
    }
}
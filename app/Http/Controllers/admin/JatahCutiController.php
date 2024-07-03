<?php

namespace App\Http\Controllers\admin;

use App\Models\Pegawai;
use App\Models\jatahCuti;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JatahCutiController extends Controller
{
    public function index(){
        // fitur pagination
        $max_view = 3;

        // fitur pencarian
        if(request('search')) {
            $jatahCuti = jatahCuti::where('nip', 'like', '%'.request('search').'%')->paginate($max_view)->withQueryString();
        }else {
            $jatahCuti = jatahCuti::orderBy('nip')->paginate($max_view);
        }

        return view('pegawai.jatahCuti.index', compact('jatahCuti'));
    }

    public function create()    
        {
            $pegawai = Pegawai::all();
            return view('pegawai.jatahCuti.create', compact('pegawai'));
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'jumlah' => 'required',
            'nip' => 'required',
            ]);

        $data = [
            'tahun' => $request->input('tahun'),
            'jumlah' => $request->input('jumlah'),
            'nip' => $request->input('nip'),
        ];

        jatahCuti::create($data);
        return redirect()->route('jatahCuti.create')->with('success', 'berhasil simpan data');

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
        $jatahCuti = jatahCuti::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('pegawai.jatahCuti.edit', compact('jatahCuti', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun' => 'required',
            'jumlah' => 'required',
            'nip' => 'required',
            ]);

        $data = [
            'tahun' => $request->input('tahun'),
            'jumlah' => $request->input('jumlah'),
            'nip' => $request->input('nip'),
        ];

        $pegawai = jatahCuti::findOrFail($id);
        $pegawai->update($data);
        return redirect()->route('jatahCuti.edit', $pegawai->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = jatahCuti::findOrFail($id);
        $pegawai->delete();
        return redirect('/pegawai/jatahCuti')->with('success', 'Berhasil menghapus data!');
    }
}

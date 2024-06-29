<?php

namespace App\Http\Controllers\admin;

use App\Models\Divisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisiController extends Controller
{
    public function index(){
        // fitur pagination
        $max_view = 3;

        // fitur pencarian
        if(request('search')) {
            $divisi = Divisi::where('nama', 'like', '%'.request('search').'%')->paginate($max_view)->withQueryString();
        }else {
            $divisi = Divisi::orderBy('nama')->paginate($max_view);
        }

        return view('dashboard.divisi.index', compact('divisi'));
    }

    public function create()
        {
            return view('dashboard.divisi.index');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:50',

        ],
        [
            'nama.required' => 'Nama Jabatan Wajib Diisi',
            'nama.min' => 'Nama Jabatan Minimal 3 Karakter',
            'nama.max' => 'Nama Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'nama' => $request->input('nama')
        ];

        Divisi::create($data);
        return redirect()->route('position.create')->with('success', 'berhasil simpan data');

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
        $divisi = Divisi::findOrFail($id);
        return view('dashboard.divisi.index', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3|max:50',
        ], [
            'nama.required' => 'Nama Jabatan Wajib Diisi',
            'nama.min' => 'Nama Jabatan Minimal 3 Karakter',
            'nama.max' => 'Nama Jabatan Maximal 50 Karakter',
        ]);

        $data = [
            'nama' => $request->input('nama')
        ];

        $divisi = Divisi::findOrFail($id);
        $divisi->update($data);
        return redirect()->route('divisi.edit', $divisi->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $divisi = Divisi::findOrFail($id);
        $divisi->delete();
        return redirect('/dashboard/divisi')->with('success', 'Berhasil menghapus data!');
    }


}

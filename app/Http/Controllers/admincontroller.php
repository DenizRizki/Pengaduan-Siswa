<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Form;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $pengaduans = Laporan::all();

          return view('admin.Pengaduan', compact('pengaduans'));
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $form = form::findOrfail($id);
        return view('admin.detail_laporan', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $form =  form::findOrFail($id);
        return view('admin.detail_laporan', compact('form'));
    }

   public function update(Request $request, $id)
{
    $form = form::findOrFail($id);

    $validated = $request->validate([
        'nama_siswa'   => 'required|string|max:255',
        'kejadian'          => 'required|integer|min:0',
        'deskripsi'       => 'required|string',
        'tempat'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'gambar'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'video'        => 'nullable|mimes:mp4,mov,avi|max:10240',
        'audio'        => 'nullable|mimes:mp3,wav|max:5120',
    ]);

    // kalau ada gambar baru, replace
    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('barang-images', 'public');
        $validated['gambar'] = $gambarPath;
    }

    $form->update($validated);

    // 🚀 redirect ke index setelah update
    return redirect()->route('admin.pengaduan')->with('success', 'Laporan berhasil diubah!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

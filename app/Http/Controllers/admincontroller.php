<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class AdminController extends Controller
{
    // Tampilkan semua laporan dari model Form
    public function index()
    {
        $pengaduans = Form::all(); // ✅ ambil data dari Form
        return view('admin.Pengaduan', compact('pengaduans'));
    }

    // Tampilkan detail laporan tertentu
    public function show($id)
    {
        $form = Form::findOrFail($id);
        return view('admin.detail_laporan', compact('form'));
    }

    // Form edit (jika diperlukan)
    public function edit($id)
    {
        $form = Form::findOrFail($id);
        return view('admin.edit_laporan', compact('form'));
    }

    // Update laporan
    public function update(Request $request, $id)
    {
        $form = Form::findOrFail($id);

        $validated = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kejadian'   => 'required|string',
            'deskripsi'  => 'required|string',
            'tempat'     => 'nullable|string|max:255',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'video'      => 'nullable|mimes:mp4,mov,avi|max:10240',
            'audio'      => 'nullable|mimes:mp3,wav|max:5120',
            'status'     => 'nullable|string'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('laporan-images', 'public');
            $validated['gambar'] = $gambarPath;
        }

        $form->update($validated);

        return redirect()->route('admin.pengaduan')->with('success', 'Laporan berhasil diperbarui!');
    }
   public function updateStatus(Request $request, $id)
    {
        $form = Form::findOrFail($id);

        // 1. Validasi untuk Status (Wajib ada)
        $request->validate([
            'status' => 'required|string', // Cukup 'string' jika kolom DB sudah diubah
        ]);

        // 2. Update Status
        $form->status = $request->status;
        
        // 3. Simpan
        $form->save();

        // 4. ✅ SOLUSI REDIRECT: Redirect eksplisit ke halaman detail yang sama
        return redirect()->route('pengaduan.show', $form->id)
                         ->with('success', 'Status laporan berhasil diperbarui menjadi ' . $form->status . '!');
    
}

}

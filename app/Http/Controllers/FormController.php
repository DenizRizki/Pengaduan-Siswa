<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $siswa = Form::all();
         return view('components.form', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('components.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kejadian' => 'required|in:pembulian,kekerasanverbal,kekerasanfisik,pelanggarantatatertib,lainnya',
            'deskripsi' => 'nullable|string',
            'tempat' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('laporan', 'public');
        }

        Form::create([
            'nama_siswa' => $request->nama_siswa,
            'kejadian' => $request->kejadian,
            'deskripsi' => $request->deskripsi,
            'tempat' => $request->tempat,
            'gambar' => $path,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditambahkan!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

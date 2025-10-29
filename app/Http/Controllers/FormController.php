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
          //
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
            'video' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:51200', 
            'audio' => 'nullable|mimetypes:audio/mpeg,audio/wav,audio/mp3|max:5120',
        ]);

        $gambarPath = $videoPath = $audioPath = null;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('laporan', 'public');
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('laporan', 'public');
        }

        if ($request->hasFile('audio')) {
            $audioPath = $request->file('audio')->store('laporan', 'public');
        }

        Form::create([
            'nama_siswa' => $request->nama_siswa,
            'kejadian' => $request->kejadian,
            'deskripsi' => $request->deskripsi,
            'tempat' => $request->tempat,
            'gambar' => $gambarPath,
            'video' => $videoPath,
            'audio' => $audioPath,
        ]);

        return view('welcome');
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

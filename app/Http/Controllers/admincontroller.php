<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admin.Pengaduan');
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
        $laporan = laporan::findOrfail($id);
        return view('admin.detail_laporan', compact('laporan'));
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

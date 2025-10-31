<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Diedit aksa

        // Buat Tabel
        $pengaduan = Form::where('created_at', '>=', now()->subDays(30))->paginate(3);

        // Buat dashboard
        $totalPengadu = Form::distinct('nama_siswa')->count();
        $totalKasus = Form::count('id');
        $kasusDitangani = Form::where('status', 'ditangani')->count();

        $firstForm = Form::orderBy('created_at')->first();
        $firstDate = $firstForm ? $firstForm->created_at->format('d M Y') : now()->format('d M Y');

        if($firstForm){
            $startDate = $firstForm->created_at;
        } else {
            $startDate = now();
        }

        $totalPengaduSejak = Form::where('created_at', '>=', $startDate)
            ->distinct('nama_siswa')
            ->count();

        $totalKasusSejak = Form::where('created_at', '>=', $startDate)
            ->count();

        $week = [now()->startOfWeek(), now()->endOfWeek()];
        $kasusBaru = Form::whereBetween('created_at', $week)->count();

        // Statistik Pengaduan Kasus
        $kasusPerBulan = Form::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', now()->year)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $dataKasus = [];
        for($i = 1; $i <= 12; $i++){
            $dataKasus[] = $kasusPerBulan[$i] ?? 0;
        }

        // Statistik kASUS dITANGANI
        $kasusDitanganiPerBulan = Form::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->where('status', 'ditangani')
            ->whereYear('created_at', now()->year)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $dataKasusDitangani = [];
        for($i = 1; $i <= 12; $i++){
            $dataKasusDitangani[] = $kasusDitanganiPerBulan[$i] ?? 0;
        }

        return view('admin.dashboard', compact('pengaduan', 'totalPengadu', 'totalKasus', 'kasusDitangani', 'kasusBaru', 'dataKasus', 'dataKasusDitangani', 'totalPengaduSejak', 'totalKasusSejak', 'firstDate'));
    }

    /**
     * Show the form for creating a new resource.
     */
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

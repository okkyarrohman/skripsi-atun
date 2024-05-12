<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use App\Models\TugasAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tugases = Tugas::all();

        return view('siswa.tugas.index', compact('tugases'));
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
        $filePresentasiName = null;
        $fileLaporanName = null;

        if ($request->hasFile('file_presentasi')) {
            $filePresentasi = $request->file('file_presentasi');
            $extension = $filePresentasi->getClientOriginalName();
            $filePresentasiName = date('YmdHis') . "." . $extension;
            $filePresentasi->move(storage_path('app/public/tugasAnswer/presentasi'), $filePresentasiName);
        }

        if ($request->hasFile('file_laporan')) {
            $fileLaporan = $request->file('file_laporan');
            $extension = $fileLaporan->getClientOriginalName();
            $fileLaporanName = date('YmdHis') . "." . $extension;
            $fileLaporan->move(storage_path('app/public/tugasAnswer/laporan'), $fileLaporanName);
        }

        $rumusanMasalah = $request->session()->get('rumusan_masalah') ?? $request->rumusan_masalah;

        TugasAnswer::create([
            'user_id' => Auth::user()->id,
            'rumusan_masalah' => $rumusanMasalah,
            'file_presentasi' => $filePresentasiName,
            'file_laporan' => $fileLaporanName
        ]);

        $request->session()->forget('rumusan_masalah');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tugases = Tugas::where('id', $id)->first();

        return view('siswa.tugas.show', compact('tugases'));
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

    public function rumusanMasalah(string $id)
    {
        $tugases = Tugas::findOrFail($id);

        return view('siswa.tugas.detailTugas.rumusanMasalah', compact('tugases'));
    }

    public function daftarTugas(string $id)
    {
        $tugases = Tugas::findOrFail($id);

        return view('siswa.tugas.detailTugas.daftarTugas', compact('tugases'));
    }

    public function laporan(string $id)
    {
        $tugases = Tugas::findOrFail($id);

        return view('siswa.tugas.detailTugas.laporan', compact('tugases'));
    }

    public function feedback(string $id)
    {
        $tugases = Tugas::findOrFail($id);

        return view('siswa.tugas.detailTugas.feedback', compact('tugases'));
    }
}

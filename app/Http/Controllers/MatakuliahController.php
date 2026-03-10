<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs,kode_mk|max:10',
            'nama_mk' => 'required|max:100',
            'sks' => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|min:1|max:8',
        ]);
        
        Matakuliah::create($request->all());
        
        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil ditambahkan!');
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
    public function edit(string $kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($kode_mk);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_mk)
    {
        // Validasi
        $request->validate([
            'nama_mk' => 'required|max:100',
            'sks' => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|min:1|max:8',
        ]);
        
        $matakuliah = Matakuliah::findOrFail($kode_mk);
        $matakuliah->update($request->all());
        
        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($kode_mk);
        $matakuliah->delete();
        
        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil dihapus!');
    }
}
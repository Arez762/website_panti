<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawais.index', compact('pegawais'));
    }

    // PegawaiController.php


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/pegawais', 'public');
        }

        Pegawai::create([
            'image' => $imagePath,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($pegawai->image) {
                Storage::disk('public')->delete($pegawai->image);
            }
            $pegawai->image = $request->file('image')->store('images/pegawais', 'public');
        }

        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->save();

        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        if ($pegawai->image) {
            Storage::disk('public')->delete($pegawai->image);
        }

        $pegawai->delete();

        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}


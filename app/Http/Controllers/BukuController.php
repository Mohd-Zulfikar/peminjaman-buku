<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaPeminjam' => 'required|string|max:100',
            'namaBuku' => 'required|string|max:100',
            'jumlahBuku' => 'required|integer',
            'tanggalPinjam' => 'required|date',
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'namaPeminjam' => 'required|string|max:100',
            'namaBuku' => 'required|string|max:100',
            'jumlahBuku' => 'required|integer',
            'tanggalPinjam' => 'required|date',
            'tanggalKembali' => 'required|date',
            'denda' => 'nullable|integer',
        ]);

        $buku->update($validated);
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index');
    }
}

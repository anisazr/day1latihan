<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class produkController extends Controller
{
     // INDEX (read + search + filter jumlah)
    public function index(Request $request)
    {
        $query = produk::query();

        // Search by nama_produk
        if ($request->has('search')) {
            $query->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        // Filter jumlah minimal
        if ($request->has('min_jumlah') && $request->min_jumlah != '') {
            $query->where('jumlah_produk', '>=', $request->min_jumlah);
        }

        $produks = $query->latest()->paginate(6);

        return view('produks.index', compact('produks'));
    }

    // CREATE
    public function create()
    {
        return view('produks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'jumlah_produk' => 'required|integer',
        ]);

        produk::create($request->all());
        return redirect()->route('produks.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // EDIT + UPDATE
    public function edit(produk $produk)
    {
        return view('produks.edit', compact('produk'));
    }

    public function update(Request $request, produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'jumlah_produk' => 'required|integer',
        ]);

        $produk->update($request->all());
        return redirect()->route('produks.index')->with('success', 'Produk berhasil diperbarui!');
    }

    // DELETE
    public function destroy(produk $produk)
    {
        $produk->delete();
        return redirect()->route('produks.index')->with('success', 'Produk berhasil dihapus!');
    }
}


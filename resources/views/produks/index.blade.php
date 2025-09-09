@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

<!-- Search & Filter -->
<form method="GET" class="flex gap-2 mb-4">
    <input type="text" name="search" placeholder="Cari produk..." 
        class="border p-2 rounded w-1/3" value="{{ request('search') }}">
    <input type="number" name="min_jumlah" placeholder="Minimal jumlah"
        class="border p-2 rounded" value="{{ request('min_jumlah') }}">
    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Search</button>
</form>

<a href="{{ route('produks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Produk</a>

@if(session('success'))
<div class="bg-green-100 text-green-700 p-2 rounded mb-3">{{ session('success') }}</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @forelse($produks as $produk)
    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-bold text-lg">{{ $produk->nama_produk }}</h2>
        <p>{{ $produk->deskripsi }}</p>
        <p class="text-sm text-gray-500">Jumlah: {{ $produk->jumlah_produk }}</p>
        <div class="flex gap-2 mt-2">
            <a href="{{ route('produks.edit', $produk) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
            <form action="{{ route('produks.destroy', $produk) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                @csrf @method('DELETE')
                <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
            </form>
        </div>
    </div>
    @empty
    <p>Tidak ada produk.</p>
    @endforelse
</div>

<div class="mt-4">{{ $produks->links() }}</div>
@endsection

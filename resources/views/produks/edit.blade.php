@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Produk</h1>
<form action="{{ route('produks.update', $produk) }}" method="POST" class="space-y-4">
    @csrf @method('PUT')
    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="w-full border p-2 rounded">
    <textarea name="deskripsi" class="w-full border p-2 rounded">{{ $produk->deskripsi }}</textarea>
    <input type="number" name="jumlah_produk" value="{{ $produk->jumlah_produk }}" class="w-full border p-2 rounded">
    <button class="bg-green-600 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection

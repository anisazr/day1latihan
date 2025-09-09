@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Produk</h1>
<form action="{{ route('produks.store') }}" method="POST" class="space-y-4">
    @csrf
    <input type="text" name="nama_produk" placeholder="Nama Produk" class="w-full border p-2 rounded">
    <textarea name="deskripsi" placeholder="Deskripsi" class="w-full border p-2 rounded"></textarea>
    <input type="number" name="jumlah_produk" placeholder="Jumlah Produk" class="w-full border p-2 rounded">
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection

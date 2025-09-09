@extends('layouts.app')

@section('content')
<div class="relative bg-cover bg-center h-[80vh]" style="background-image: url('{{ asset('image/bg header.jpg') }}')">
    <div class="absolute inset-0 bg-green-900 bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di Website Portofolio Saya</h1>
            <p class="mb-6">Berisi karya, produk, dan project yang sudah saya buat.</p>
            <a href="{{ route('produks.index') }}" class="bg-green-600 hover:bg-green-500 px-6 py-3 rounded-lg">Lihat Produk</a>
        </div>
    </div>
</div>
@endsection

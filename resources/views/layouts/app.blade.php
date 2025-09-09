<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Website Portofolio' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-green-700 text-white">
        <div class="max-w-6xl mx-auto flex items-center justify-between p-4">
            <div class="flex items-center gap-2">
                <img src="{{ asset('image/growana logo.jpg') }}" class="h-10">
                <span class="font-bold text-lg">Portofolio</span>
            </div>
            <ul class="flex gap-6 text-sm">
                <li><a href="/" class="hover:text-gray-200">Home</a></li>
                <li><a href="{{ route('produks.index') }}" class="hover:text-gray-200">Produk</a></li>
                <li><a href="#" class="hover:text-gray-200">Tentang Saya</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-6xl mx-auto p-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-green-700 text-white text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} Portofolio Saya</p>
    </footer>

</body>
</html>

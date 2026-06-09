<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - UTS Pemrograman Web</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-5xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600">DevPortfolio</a>
            <div class="space-x-6">
                <a href="{{ route('home') }}" class="hover:text-blue-600 font-medium transition">Home</a>
                <a href="{{ route('projects') }}" class="hover:text-blue-600 font-medium transition">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600 font-medium transition">Contact</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-5xl mx-auto px-4 py-10 w-full">
        @yield('content')
    </main>

    <footer class="bg-white border-t py-6 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} - UTS Pemrograman Web. Powered by Laravel & Filament.
    </footer>

    @livewireScripts
</body>
</html>
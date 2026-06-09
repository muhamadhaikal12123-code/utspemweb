@extends('layouts.app')

@section('content')
<div class="space-y-12">
    <div class="flex flex-col md:flex-row items-center gap-8 py-6">
        <div class="flex-1 space-y-4">
            <h1 class="text-4xl font-extrabold tracking-tight">Halo, Saya Mahasiswa Teknik Informatika</h1>
            <p class="text-gray-600 text-lg leading-relaxed">
                Fokus mengembangkan solusi sistem berbasis web yang bersih, responsif, dan fungsional. Berpengalaman menggunakan ekosistem PHP modern serta arsitektur MVC.
            </p>
            <div class="pt-2">
                <a href="{{ route('projects') }}" class="bg-blue-600 text-white font-medium px-6 py-2.5 rounded-lg hover:bg-blue-700 transition shadow-sm">Lihat Project Saya</a>
            </div>
        </div>
        <div class="w-44 h-44 bg-blue-100 rounded-full flex items-center justify-center text-center font-bold text-blue-600 text-sm border-4 border-blue-500 shadow-inner">
            <span>[Foto Profil UTS]</span>
        </div>
    </div>

    <div class="border-t pt-8">
        <h2 class="text-2xl font-bold mb-4">Stack Keahlian / Core Tech</h2>
        <div class="flex flex-wrap gap-3">
            <span class="bg-gray-100 px-4 py-2 rounded-full font-medium text-sm text-gray-700 border">Laravel Framework</span>
            <span class="bg-gray-100 px-4 py-2 rounded-full font-medium text-sm text-gray-700 border">Filament v3 (Admin Panel)</span>
            <span class="bg-gray-100 px-4 py-2 rounded-full font-medium text-sm text-gray-700 border">Livewire v3</span>
            <span class="bg-gray-100 px-4 py-2 rounded-full font-medium text-sm text-gray-700 border">Blade Templating</span>
            <span class="bg-gray-100 px-4 py-2 rounded-full font-medium text-sm text-gray-700 border">MariaDB / Docker</span>
        </div>
    </div>
</div>
@endsection
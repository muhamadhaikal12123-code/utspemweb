@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <a href="{{ route('projects') }}" class="text-blue-600 text-sm font-medium hover:underline inline-flex items-center">&larr; Kembali ke daftar project</a>

    <div class="bg-white border rounded-xl p-6 md:p-8 shadow-sm space-y-6">
        <div>
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">{{ $project->tech_stack }}</span>
            <h1 class="text-3xl font-extrabold mt-1 text-gray-900">{{ $project->title }}</h1>
        </div>

        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" class="w-full max-h-96 object-cover rounded-lg shadow-sm" alt="{{ $project->title }}">
        @endif

        <div class="space-y-2">
            <h2 class="text-xl font-bold text-gray-900">Deskripsi Ringkas</h2>
            <p class="text-gray-700 leading-relaxed">{{ $project->description }}</p>
        </div>

        @if($project->project_url)
            <div>
                <a href="{{ $project->project_url }}" target="_blank" class="inline-block bg-blue-600 text-white font-medium px-4 py-2 rounded-lg hover:bg-blue-700 transition">Kunjungi Live Tautan</a>
            </div>
        @endif

        <hr class="border-gray-200">

        <div class="space-y-3">
            <h2 class="text-xl font-bold text-gray-900">Laporan Awal / Progress Project</h2>
            <div class="prose max-w-none text-gray-800 bg-gray-50 p-6 rounded-xl border border-dashed border-gray-300">
                {!! $project->status_progress ?? '<p class="text-gray-500 italic">Belum ada konten laporan awal yang diinput untuk project ini di admin panel Filament.</p>' !!}
            </div>
        </div>
    </div>
</div>
@endsection
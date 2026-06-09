@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-3xl font-bold">Showcase Project</h1>
        <p class="text-gray-600">Daftar portofolio serta progress laporan project akhir yang dikelola dinamis.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-6 pt-4">
        @forelse($projects as $project)
            <div class="bg-white border rounded-xl overflow-hidden shadow-sm flex flex-col justify-between">
                <div>
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="h-48 w-full object-cover" alt="{{ $project->title }}">
                    @else
                        <div class="h-48 bg-gray-100 flex items-center justify-center text-gray-400 font-medium">No Project Banner Image</div>
                    @endif
                    <div class="p-6 space-y-2">
                        <span class="text-xs font-semibold uppercase tracking-wider text-blue-600">{{ $project->tech_stack }}</span>
                        <h2 class="text-xl font-bold text-gray-900">{{ $project->title }}</h2>
                        <p class="text-gray-600 text-sm line-clamp-3 leading-relaxed">{{ $project->description }}</p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="{{ route('projects.detail', $project->slug) }}" class="block text-center bg-gray-900 text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-gray-800 transition">Lihat Detail & Laporan Progress</a>
                </div>
            </div>
        @empty
            <div class="col-span-2 text-center py-12 bg-white border rounded-xl border-dashed">
                <p class="text-gray-500">Belum ada data project. Sila tambahkan lewat backend Filament resource.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
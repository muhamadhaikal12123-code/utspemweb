@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto space-y-6">
    <div class="text-center">
        <h1 class="text-3xl font-bold">Contact Hub</h1>
        <p class="text-gray-600 mt-1">Kirim pesan langsung ke backend admin panel via Livewire.</p>
    </div>

    <div class="bg-white border rounded-xl p-6 shadow-sm">
        @livewire('contact-form')
    </div>
</div>
@endsection
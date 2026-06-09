<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Models\Project;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

Route::get('/', function () {
    $projects = Project::all(); 
    return view('welcome', compact('projects'));
});

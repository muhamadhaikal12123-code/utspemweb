<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Muhamad Haikal Umardi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #030712; }
        .glass { background: rgba(17, 24, 39, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .text-gradient { background: linear-gradient(to right, #fbbf24, #f59e0b, #ea580c); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .bg-pattern { background-image: radial-gradient(#1f2937 1px, transparent 1px); background-size: 20px 20px; }
        .hero-glow { position: absolute; top: -10%; left: 50%; transform: translateX(-50%); width: 600px; height: 400px; background: rgba(245, 158, 11, 0.15); filter: blur(120px); border-radius: 100%; z-index: 0; }
        .chill-glow { position: absolute; bottom: 10%; right: 10%; width: 300px; height: 300px; background: rgba(59, 130, 246, 0.1); filter: blur(100px); border-radius: 100%; z-index: 0; }
    </style>
</head>
<body class="text-gray-300 bg-pattern relative min-h-screen">

    <div class="hero-glow"></div>
    <div class="chill-glow"></div>

    <nav class="sticky top-0 z-50 glass border-b border-white/5 mb-10">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="font-extrabold text-xl tracking-tighter text-white">
                HAIKAL<span class="text-yellow-500">.</span>
            </div>
            <a href="/admin" class="text-xs font-bold uppercase tracking-widest bg-yellow-500 hover:bg-yellow-600 text-black px-5 py-2.5 rounded-full transition-all shadow-lg shadow-yellow-500/20">
                Admin Panel
            </a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 relative z-10">
        <section class="py-12 md:py-20 text-center">
            <div class="inline-block px-4 py-1.5 mb-6 rounded-full glass text-[10px] font-bold uppercase tracking-[0.2em] text-yellow-500 border-yellow-500/20">
                🚀 Project Repository & Case Study
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 tracking-tight">
                <span class="text-gradient">Muhamad Haikal Umardi</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-400 font-medium mb-2">NIM: <span class="text-white">20240801169</span></p>
            <p class="max-w-2xl mx-auto text-gray-500 leading-relaxed text-sm md:text-base">
                Mahasiswa Teknik Informatika yang fokus pada pengembangan aplikasi web modern dengan efisiensi tinggi, keamanan terjamin, dan desain antarmuka yang intuitif.
            </p>
        </section>

        <section class="pb-20">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-2xl font-bold text-white tracking-tight">Featured Projects</h2>
                <div class="h-px flex-grow mx-6 bg-white/10"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($projects as $project)
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-2xl blur opacity-10 group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative glass p-8 rounded-2xl flex flex-col h-full hover:bg-gray-900/50 transition-all">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 bg-yellow-500/10 rounded-xl">
                                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </div>
                            <span class="text-[10px] font-black font-mono bg-white/5 px-3 py-1 rounded-md text-gray-400 border border-white/10 uppercase tracking-tighter">
                                {{ $project->progress ?? '100' }}% Completed
                            </span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-yellow-400 transition">{{ $project->title ?? $project->name }}</h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-8 flex-grow">
                            {{ $project->description }}
                        </p>

                        <div class="space-y-4">
                            <div class="text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em]">Technologies Used</div>
                            <div class="flex flex-wrap gap-2">
                                @if(!empty($project->tech_stack))
                                    @foreach(explode(',', $project->tech_stack) as $tech)
                                        <span class="px-3 py-1.5 rounded-lg bg-white/5 text-[11px] font-semibold text-gray-300 border border-white/5">
                                            {{ trim($tech) }}
                                        </span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full glass p-20 rounded-3xl text-center">
                    <p class="text-gray-500 italic">No projects found. Log in to Admin Panel to add your amazing work.</p>
                </div>
                @endforelse
            </div>
        </section>

        <section class="pb-24 relative">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-2xl font-bold text-white tracking-tight">Let's Connect</h2>
                <div class="h-px flex-grow mx-6 bg-white/10"></div>
            </div>

            <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-amber-400 to-yellow-500 rounded-3xl blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
                
                <div class="relative glass p-8 md:p-12 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-8 bg-gradient-to-br from-gray-900/40 to-transparent">
                    <div class="max-w-xl text-center md:text-left">
                        <div class="inline-flex items-center space-x-2 text-xs font-mono text-blue-400 mb-3 bg-blue-500/10 px-3 py-1 rounded-full border border-blue-500/20">
                            <span>☕</span> <span>Open for Coffee & Discussions</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-white mb-4 tracking-tight">
                            Gak Cuma Ngoding, Gua Juga Asik Diajak Ngobrol!
                        </h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                            Mulai dari bahas arsitektur sistem, automasi bisnis digital kayak <span class="text-yellow-400 font-medium">Telur Pedia</span>, mabar game taktis, atau sekadar bertukar pikiran sambil ngopi santai—*I'm always down to connect!* Dosen atau temen kuliah yang mau diskusi, langsung senggol aja bray.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto shrink-0 justify-center">
                        <a href="https://wa.me/#" target="_blank" class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-emerald-600/20 hover:bg-emerald-600 text-emerald-400 hover:text-white border border-emerald-500/30 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg">
                            <span>💬</span> <span>Koneksi WhatsApp</span>
                        </a>
                        <a href="mailto:muhamadhaikal12123@gmail.com" class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-white/5 hover:bg-white/10 text-white border border-white/10 rounded-xl font-semibold text-sm transition-all duration-300">
                            <span>✉️</span> <span>Kirim Email</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-12 border-t border-white/5 bg-black/50 backdrop-blur-xl relative z-10">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-center md:text-left">
                <p class="text-white font-bold text-sm">Muhamad Haikal Umardi</p>
                <p class="text-gray-500 text-xs">Ujian Tengah Semester - Pemrograman Web</p>
            </div>
            <div class="text-gray-600 text-[10px] font-mono tracking-widest">
                &copy; 2026 UTS-PORTOFOLIO.BUILT_WITH_LARAVEL_11
            </div>
        </div>
    </footer>

</body>
</html>

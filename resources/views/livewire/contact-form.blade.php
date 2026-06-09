<div>
    @if ($successMessage)
        <div class="p-4 mb-4 text-sm text-green-800 bg-green-50 rounded-lg border border-green-200" role="alert">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" wire:model="name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('name') border-red-500 @enderror">
            @error('name') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
            <input type="email" wire:model="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('email') border-red-500 @enderror">
            @error('email') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Isi Pesan</label>
            <textarea wire:model="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('message') border-red-500 @enderror"></textarea>
            @error('message') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-medium py-2.5 px-4 rounded-lg hover:bg-blue-700 transition shadow-sm">
            Kirim Pesan
        </button>
    </form>
</div>
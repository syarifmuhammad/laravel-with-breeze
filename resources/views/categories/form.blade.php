<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <x-input-label class="mb-2">Kategori Induk</x-input-label>
                    <x-select-option class="w-full">
                        <option value="1" {{ old('kategori_induk', isset($kategori_induk) ? $kategori_induk : '') == 1 ? 'selected' : '' }}>Kategori Teratas</option>
                        <option value="2" {{ old('kategori_induk', isset($kategori_induk) ? $kategori_induk : '') == 2 ? 'selected' : '' }}>Elektronik</option>
                    </x-select-option>
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Nama Kategori</x-input-label>
                    <x-text-input class="w-full" type="text" value="{{ old('nama_kategori', isset($nama_kategori) ? $nama_kategori : '') }}" />
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Urutan</x-input-label>
                    <x-text-input class="w-full" type="number" min="0" value="{{ old('urutan', isset($urutan) ? $urutan : '') }}" />
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Ikon</x-input-label>
                    <x-text-input class="w-full" type="file" />
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Deskripsi</x-input-label>
                    <x-textarea class="w-full">
                        {{ old('deskripsi', isset($deskripsi) ? $deskripsi : '') }}
                    </x-textarea>
                </div>
                <div class="mb-4">
                    <x-primary-button>Simpan</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

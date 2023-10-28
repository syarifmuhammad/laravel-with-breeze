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
                    <x-input-label class="mb-2">Nama Produk</x-input-label>
                    <x-text-input class="w-full" value="{{ old('nama', isset($nama) ? $nama : '') }}" />
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Kategori Produk</x-input-label>
                    <x-select-option class="w-full">
                        <option value="2" {{ old('kategori', isset($kategori) ? $kategori : '') == 1 ? 'selected' : '' }}>Elektronik</option>
                    </x-select-option>
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Harga</x-input-label>
                    <x-text-input class="w-full" type="number" value="{{ old('harga', isset($harga) ? $harga : '') }}" min="0" />
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Stok</x-input-label>
                    <x-text-input class="w-full" type="number" value="{{ old('stok', isset($stok) ? $stok : '') }}" min="0" />
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

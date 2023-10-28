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
                    <x-input-label class="mb-2">Nama Pembeli</x-input-label>
                    <x-text-input class="w-full" value="{{ old('nama_pembeli', isset($nama_pembeli) ? $nama_pembeli : '') }}" />
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Pilihan Produk</x-input-label>
                    <x-select-option class="w-full mb-2">
                        <option value="1">Laptop Asus</option>
                    </x-select-option>
                    <x-primary-button>Tambah</x-primary-button>
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Produk</x-input-label>
                    <div class="relative rounded-xl overflow-auto bg-slate-50">
                        <div class="shadow-sm overflow-hidden my-8">
                            <table class="w-full table-auto border-collapse">
                                <thead>
                                    <tr>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">No</th>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Nama</th>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Jumlah</th>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Total</th>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @if (isset($products))
                                        @foreach ($products as $key => $product)
                                        <tr>
                                            <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ $key + 1 }}</td>
                                            <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ $product['nama'] }}</td>
                                            <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">
                                                <x-text-input type="number" min="1" value="{{ $product['jumlah'] }}" />
                                            </td>
                                            <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">Rp 100.000</td>
                                            <td class="border-b border-slate-100 p-4 pl-8 text-slate-500"><x-danger-button>
                                                {{ __('Hapus') }} </x-danger-button></td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot class="bg-green-500 text-white fw-bold">
                                    <tr>
                                        <td class="p-4 pl-8" colspan="3">TOTAL PEMBELIAN</td>
                                        <td class="p-4 pl-8" colspan="2">Rp 100.000</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Jenis Pembayaran</x-input-label>
                    <x-select-option class="w-full mb-2">
                        <option value="1" {{ old('jenis_pembayaran', isset($jenis_pembayaran) ? $jenis_pembayaran : '') == 1 ? 'selected' : '' }}>Tunai</option>
                        <option value="2" {{ old('jenis_pembayaran', isset($jenis_pembayaran) ? $jenis_pembayaran : '') == 2 ? 'selected' : '' }}>Non Tunai</option>
                    </x-select-option>
                </div>
                <div class="mb-4">
                    <x-input-label class="mb-2">Jumlah Pembayaran</x-input-label>
                    <x-text-input class="w-full" type="number" value="{{ old('jumlah_pembayaran', isset($jumlah_pembayaran) ? $jumlah_pembayaran : '') }}" min="0" />
                </div>
                <div class="mb-4">
                    <x-primary-button>Simpan</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

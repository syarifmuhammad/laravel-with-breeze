<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{route('products.create')}}" class="mb-4 inline-block">
                    <x-primary-button>
                        {{ __('Tambah Produk') }} </x-primary-button>
                </a>
                <div class="relative rounded-xl overflow-auto bg-slate-50">
                    <div class="shadow-sm overflow-hidden my-8">
                        <table class="w-full table-auto border-collapse">
                            <thead>
                                <tr>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">No</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Kategori</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Nama Produk</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Harga</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Stock</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Deskripsi</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">1</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">Elektronik</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">Laptop</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">1000000</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">100</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, dolorum.</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">
                                        <a href="{{ route('products.update', 1) }}"> <x-secondary-button>
                                                {{ __('Edit') }} </x-secondary-button></a>
                                        <x-danger-button>
                                            {{ __('Hapus') }} </x-danger-button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
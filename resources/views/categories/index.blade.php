<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('categories.create') }}" class="mb-4 inline-block">
                    <x-primary-button>
                        {{ __('Tambah Kategori') }} </x-primary-button>
                </a>
                <div class="relative rounded-xl overflow-auto bg-slate-50">
                    <div class="shadow-sm overflow-hidden my-8">
                        <table class="w-full table-auto border-collapse">
                            <thead>
                                <tr>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">No</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Ikon
                                    </th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">
                                        Kategori Induk</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Nama Kategori</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Urutan
                                    </th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">
                                        Deskripsi</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">1</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1"
                                            id="Capa_1" viewBox="0 0 400 400"
                                            xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M364.992,196.363c-0.784-0.625-1.599-1.251-2.449-1.886c-2.827-40.258-20.361-77.712-49.682-105.904    C282.334,59.221,242.253,43.057,200,43.057S117.666,59.222,87.139,88.573c-29.321,28.192-46.855,65.646-49.682,105.905    c-0.852,0.636-1.666,1.263-2.449,1.886C12.432,214.342,0,238.412,0,264.141c0,25.729,12.432,49.798,35.007,67.775    c19.897,15.846,45.273,24.969,69.663,25.026c4.768,0,9.252-1.854,12.626-5.223c3.388-3.377,5.252-7.873,5.252-12.657V189.217    c0-4.783-1.864-9.278-5.253-12.66c-3.375-3.365-7.866-5.219-12.669-5.219c-1.875,0.004-3.769,0.064-5.676,0.179    c14.572-42.573,55.133-72.269,101.05-72.269s86.479,29.696,101.05,72.27c-1.919-0.116-3.827-0.176-5.719-0.18    c-4.77,0-9.251,1.854-12.628,5.222c-3.386,3.379-5.251,7.875-5.251,12.657v149.848c0,4.783,1.866,9.279,5.253,12.658    c3.375,3.367,7.859,5.221,12.626,5.221h0.043c24.346-0.059,49.721-9.182,69.619-25.024C387.568,313.938,400,289.867,400,264.141    C400,238.412,387.568,214.342,364.992,196.363z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">Top</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">Elektronik</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">1</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minus!</td>
                                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">
                                        <a href="{{ route('categories.update', 1) }}"> <x-secondary-button>
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

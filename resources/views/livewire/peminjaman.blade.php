    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Peminjaman') }}
        </h2>
        @if(Session::get('success'))
        <div class="bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert">
            <span class="font-bold">Success</span> Berhasil Menambahkan Barang
        </div>
        @endif
        @if(Session::get('successEdit'))
        <div class="bg-blue-100 border border-blue-200 text-sm text-blue-800 rounded-lg p-4 dark:bg-blue-800/10 dark:border-blue-900 dark:text-blue-500" role="alert">
            <span class="font-bold">Info</span> Data Berhasil Di Edit
        </div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                                    <div class="py-3 px-4">
                                        <div class="relative max-w-xs">
                                            <label for="hs-table-search" class="sr-only">Search</label>
                                            <input type="text" wire:model.live="cari" name="hs-table-search" id="hs-table-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search for items">
                                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                                <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="11" cy="11" r="8" />
                                                    <path d="m21 21-4.3-4.3" /></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="py-3 px-4 pe-0">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-table-search-checkbox-all" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                            <label for="hs-table-search-checkbox-all" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Id Inventaris</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nama Barang</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nama Peminjam</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tanggal Pinjam</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tanggal Kembali</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Petugas</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                @foreach($peminjamans as $data)
                                                <tr>
                                                    <td class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-table-checkbox-2" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                            <label for="hs-table-checkbox-2" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$data->id_inventaris}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->nama_barang}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->nama_peminjam}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->tanggal_pinjam}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->tanggal_kembali}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->status}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->petugas}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <button type="button" wire:click="edit({{$data->id}})" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                            Edit
                                                        </button>
                                                        <button wire:click="delete({{$data->id}})" wire:confirm="Are you sure ?" type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                            DELETE
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
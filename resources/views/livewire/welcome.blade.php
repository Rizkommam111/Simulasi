<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Form Peminjaman Barang') }}
    </h2>
    @if(Session::get('success'))

    <div class="bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert">
        <span class="font-bold">Success</span> Berhasil Mangajukan Peminjaman
    </div>
    @endif
</x-slot>
<div class="w-full">
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <div>
                                        <form wire:submit="store">
                                            <!-- nama_barang -->
                                            <div>
                                                <x-input-label for="nama_barang" :value="__('Nama Barang')" />
                                                <select wire:model.change="id_inventaris" id="kondisi" class="block mt-1 w-full" type="select" nama_barang="nama_barang" required autofocus autocomplete="nama_barang">
                                                    <option value="0">Harus Di ISI</option>

                                                    @foreach($datas as $id => $nama_barang)
                                                    <option value="{{$id}}">{{$nama_barang}}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('nama_barang')" class="mt-2" />
                                            </div>
                                            <div>
                                                <x-input-label for="nama_peminjam" :value="__('Nama Peminjam')" />
                                                <x-text-input wire:model.live="nama_peminjam" id="nama_barang" class="block mt-1 w-full" type="text" nama_barang="nama_barang" required autofocus autocomplete="nama_barang" />
                                                <x-input-error :messages="$errors->get('nama_peminjam')" class="mt-2" />
                                            </div>
                                            <div>
                                                <x-input-label for="tanggal_pinjam" :value="__('Tanggal Pinjam')" />
                                                <x-text-input wire:model="tanggal_pinjam" id="tanggal_register" class="block mt-1 w-full" type="date" nama_barang="nama_barang" required autofocus autocomplete="nama_barang" />
                                                <x-input-error :messages="$errors->get('tanggal_pinjam')" class="mt-2" />
                                            </div>
                                            <div>
                                                <x-input-label for="tanggal_kembali" :value="__('Tanggal Kembali')" />
                                                <x-text-input wire:model="tanggal_kembali" id="tanggal_register" class="block mt-1 w-full" type="date" nama_barang="nama_barang" required autofocus autocomplete="nama_barang" />
                                                <x-input-error :messages="$errors->get('tanggal_register')" class="mt-2" />
                                            </div>
                                            <div>
                                                <x-input-label for="status" :value="__('Status')" />
                                                <select wire:model="status" id="kondisi" class="block mt-1 w-full" type="select" nama_barang="nama_barang" required autofocus autocomplete="nama_barang">
                                                    <option value="NULL">HARUS DI ISI</option>
                                                    <option value="Belum Kembali">Belum Kembali</option>
                                                    <option value="Sudah Kembali">Sudah Kembali</option>
                                                    <option value="Proses">Proses</option>
                                                </select>
                                                <x-input-error :messages="$errors->get('kondisi')" class="mt-2" />
                                            </div>





                                            <div class="flex items-center justify-end mt-4">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                                                    {{ __('Already registered?') }}
                                                </a>

                                                <x-primary-button class="ms-4">
                                                    {{ __('Ajukan Permintaan') }}
                                                </x-primary-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
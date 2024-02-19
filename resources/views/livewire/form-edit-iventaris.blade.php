    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Data Inventaris') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form wire:submit="update">
                            <!-- nama_barang -->
                            <div>
                                <x-input-label for="nama_barang" :value="__('Nama Barang')" />
                                <x-text-input wire:model="nama_barang" id="nama_barang" class="block mt-1 w-full" type="text" nama_barang="nama_barang"  autofocus autocomplete="nama_barang" />
                                <x-input-error :messages="$errors->get('nama_barang')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="kondisi" :value="__('Kondisi')" />
                                <select wire:model="kondisi" id="kondisi" class="block mt-1 w-full" type="select" nama_barang="nama_barang"  autofocus autocomplete="nama_barang" >
                                    <option value="NULL">HARUS DI ISI</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Perbaikan">Perbaikan</option>
                                </select>
                                <x-input-error :messages="$errors->get('kondisi')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="stok" :value="__('Stok')" />
                                <x-text-input wire:model="stok" id="stok" class="block mt-1 w-full" type="number" nama_barang="nama_barang"  autofocus autocomplete="nama_barang" />
                                <x-input-error :messages="$errors->get('stok')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="tanggal_register" :value="__('Tanggal Register')" />
                                <x-text-input wire:model="tanggal_register" id="tanggal_register" class="block mt-1 w-full" type="date" nama_barang="nama_barang"  autofocus autocomplete="nama_barang" />
                                <x-input-error :messages="$errors->get('tanggal_register')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="foto" :value="__('Foto')" />
                                <x-text-input wire:model="foto" id="foto" class="block mt-1 w-full" type="file" nama_barang="nama_barang" autofocus autocomplete="nama_barang" />
                                <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                            </div>

                           

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="ms-4">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
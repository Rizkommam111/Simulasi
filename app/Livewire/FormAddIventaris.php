<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Inventaris;
use Illuminate\Support\Facades\Hash;
use Pest\Support\Str;

class FormAddIventaris extends Component
{
    public $nama_barang;
    public $kondisi;
    public $stok;
    public $tanggal_register;
    //public $foto;

    public function register()
    {
        Inventaris::create([
            'id_inventaris' => random_int(1000, 9999),
            'nama_barang' => $this->nama_barang,
            'kondisi' => $this->kondisi,
            'stok' => $this->stok,
            'tanggal_register' => $this->tanggal_register,
            'foto' => '-'
        ]);
        return redirect()->route('inventaris')->with(['success' => "success"]);
    }

    public function render()
    {
        $kondisi = $this->kondisi;
        return view('livewire.form-add-iventaris');
    }
}

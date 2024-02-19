<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Inventaris;
use Illuminate\Support\Facades\Hash;
use Pest\Support\Str;

class FormAddIventaris extends Component
{
    use WithFileUploads;
    #[Validate('required|min:3')]
    public $nama_barang;
    #[Validate('required|min:3')]
    public $kondisi;
    #[Validate('required|min:3')]
    public $stok;
    #[Validate('required|min:3')]
    public $tanggal_register;
    #[Validate('image|max:1024')]
    public $foto;

    public function register()
    {
        $name = Str::random(5) . '.' . $this->foto->extension();
        $this->foto->storeAs('photos', $name);

        $this->validate();
        Inventaris::create([
            'id_inventaris' => random_int(1000, 9999),
            'nama_barang' => $this->nama_barang,
            'kondisi' => $this->kondisi,
            'stok' => $this->stok,
            'tanggal_register' => $this->tanggal_register,
            'foto' => $name
        ]);
        return redirect()->route('inventaris')->with(['success' => "success"]);
    }

    public function render()
    {
        $kondisi = $this->kondisi;
        return view('livewire.form-add-iventaris');
    }
}

<?php

namespace App\Livewire;

use App\Models\Inventaris;
use Livewire\Component;

class FormEditIventaris extends Component
{
    public $id;
    public $nama_barang;
    public $kondisi;
    public $stok;
    public $tanggal_register;
    public function mount($id)
    {
        $this->id = $id;
    }

    public function update()
    {
        $data = Inventaris::find($this->id);
        $data->nama_barang = $this->nama_barang;
        $data->kondisi = $this->kondisi;
        $data->stok = $this->stok;
        $data->tanggal_register = $this->tanggal_register;
        $data->update();
        return redirect()->route('inventaris')->with(['successEdit' => "Sucess"]);
    }

    public function render()
    {
        $data = Inventaris::find($this->id);
        if($data)
        {
            $this->nama_barang = $data->nama_barang;
            $this->kondisi = $data->kondisi;
            $this->stok = $data->stok;
            $this->tanggal_register = $data->tanggal_register;
        }

        $id = $this->id;
        //$this->nama_barang = $data->nama_barang;
        return view('livewire.form-edit-iventaris', compact('id'));
    }
}

<?php

namespace App\Livewire;

use App\Models\Peminjaman as ModelsPeminjaman;
use Livewire\Component;

class Peminjaman extends Component
{
    public $cari;
    public function edit($id)
    {
        return redirect()->route('editPeminjaman', ['id' => $id]);
    }

    public function delete($id)
    {
        $data = ModelsPeminjaman::find($id);
        $data->delete();
    }

    public function render()
    {
        if($this->cari != null)
        {
            $peminjamans = ModelsPeminjaman::where("nama_barang", 'LIKE', "%{$this->cari}%")->get();
        }else{
            $peminjamans = ModelsPeminjaman::all();

        }
        return view('livewire.peminjaman', compact('peminjamans'));
    }
}

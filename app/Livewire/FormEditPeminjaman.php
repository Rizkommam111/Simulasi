<?php

namespace App\Livewire;

use App\Models\Inventaris;
use App\Models\Peminjaman;
use Livewire\Component;

class FormEditPeminjaman extends Component
{
    public $id;
    public $id_inventaris;
    public $nama_barang;
    public $nama_peminjam;
    public $tanggal_pinjam;
    public $tanggal_kembali;
    public $status;
    public $petugas;
    public function mount($id)
    {
        $this->id = $id;
    }

    public function update()
    {
        $data = Peminjaman::find($this->id);
        $data->id_inventaris = $this->id_inventaris;
        $data->nama_barang = $this->nama_barang;
        $data->nama_peminjam = $this->nama_peminjam;
        $data->tanggal_pinjam = $this->tanggal_pinjam;
        $data->tanggal_kembali = $this->tanggal_kembali;
        $data->status = $this->status;
        $data->petugas = $this->petugas;
        $data->update();
        return redirect()->route('peminjaman')->with(['successEdit' => 'Sucess']);
    }

    public function render()
    {
        $data = Peminjaman::find($this->id);
        if($data)
        {
            $this->id_inventaris = $data->id_inventaris;
            $this->nama_barang = $data->nama_barang;
            $this->nama_peminjam = $data->nama_peminjam;
            $this->tanggal_pinjam = $data->tanggal_pinjam;
            $this->tanggal_kembali = $data->tanggal_kembali;
            $this->status = $data->status;
            $this->petugas = $data->petugas;
        }
        $inventaris = Inventaris::all();
        return view('livewire.form-edit-peminjaman', compact('inventaris'));
    }
}

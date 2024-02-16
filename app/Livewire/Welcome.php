<?php

namespace App\Livewire;

use App\Models\Inventaris;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Pest\Support\Str;


class Welcome extends Component
{

    public $nama_barang;
    public $id_inventaris;
    public $nama_peminjam;
    public $tanggal_pinjam;
    public $tanggal_kembali;
    public $status;
    public $petugas;

    public function store()
    {

        $this->nama_barang = Inventaris::find($this->id_inventaris);
        Peminjaman::create([
            'id_inventaris' => $this->id_inventaris,
            'nama_barang' => $this->nama_barang->nama_barang,
            'nama_peminjam' => $this->nama_peminjam,
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_kembali' => $this->tanggal_kembali,
            'status' => $this->status,
            'petugas' => auth()->user()->name
        ]);

        return redirect('/dashboard')->with(['success' => 'Berhasil']);   
    }

    #[Layout('layouts.guest')] 
    public function render()
    {
        $datas = Inventaris::all()->pluck('nama_barang', 'id');

        return view('livewire.welcome', compact('datas'));
    }
}

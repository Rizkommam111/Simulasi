<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Inventaris as ModelInventaris;

class Inventaris extends Component
{
    public $cari;

    public function addData(){
        return redirect()->route('addInventaris');
    }

    public function delete($id)
    {
        $data = ModelInventaris::find($id);
        $data->delete();
    }

    public function edit($id)
    {
        return redirect()->route('editInventaris', ['id' => $id]);
    }

    public function render()
    {
        if($this->cari != null)
        {
            $inventaris = ModelInventaris::where("nama_barang", 'LIKE', "%{$this->cari}%")->get();
        }else{
            $inventaris = ModelInventaris::all();

        }
        return view('livewire.inventaris', compact('inventaris'));
    }
}

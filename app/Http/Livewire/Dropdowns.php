<?php

namespace App\Http\Livewire;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Tracking;
use Livewire\Component;

class Dropdowns extends Component
{
public $provinsi;
public $kota;
public $kecamatan;
public $kelurahan;
public $rw;
public $tracking1;
public $idt;

public $selectedProvinsi = null;
public $selectedKota = null;
public $selectedKecamatan = null;
public $selectedKelurahan = null;
public $selectedRw = null;

public function mount($selectedRw = null,$idt = null)
{
    $this->provinsi = Provinsi::all();
    $this->selectedRw = $selectedRw;
    $this->idt = $idt;
    if (!is_null($idt)){
        $this->tracking1 = Tracking::findOrFail($idt);
    }
    $this->kota = Kota::with('provinsi')->get();
    $this->kecamatan = Kecamatan::whereHas('kota', function ($query) {
        $query->whereId(request()->input('kota_id', 0));
    })->pluck('nama_kec', 'id');
    $this->kelurahan = Kelurahan::whereHas('kecamatan', function ($query) {
        $query->whereId(request()->input('kecamatan_id', 0));
    })->pluck('nama_kel', 'id');
    $this->rw = Rw::whereHas('kelurahan', function ($query) {
        $query->whereId(request()->input('kelurahan_id', 0));
    })->pluck('nama_rw', 'id');
    $this->selectedRw = $selectedRw;

    if (!is_null($selectedRw)) {
        $rw = Rw::with('kelurahan.kecamatan.kota.provinsi')->find($selectedRw);
        if ($rw) {
            $this->rw = Rw::where('kelurahan_id', $rw->kelurahan_id)->get();
            $this->kelurahan = Kelurahan::where('kecamatan_id', $rw->kelurahan->kecamatan_id)->get();
            $this->kecamatan = Kecamatan::where('id_kota', $rw->kelurahan->kecamatan->kota_id)->get();
            $this->kota = Kota::where('provinsi_id', $rw->kelurahan->kecamatan->kota->provinsi_id)->get();
            $this->selectedProvinsi =$rw->kelurahan->kecamatan->kota->provinsi_id;
            $this->selectedKota = $rw->kelurahan->kecamatan->kota_id;
            $this->selectedKecamatan = $rw->kelurahan->kecamatan_id;
            $this->selectedKelurahan = $rw->kelurahan_id;
        }
    }
}

public function render()
{
    return view('livewire.dropdowns');
}

public function updatedSelectedProvinsi($provinsi)
{
    $this->kota = Kota::where('provinsi_id', $provinsi)->get();
    $this->selectedKota = NULL;
    $this->selectedKecamatan = NULL;
    $this->selectedKelurahan = NULL;
    $this->selectedRw = NULL;
}
public function updatedSelectedKota($kota)
{
    $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
    $this->selectedKecamatan = NULL;
    $this->selectedKelurahan = NULL;
    $this->selectedRw = NULL;
}

public function updatedSelectedKecamatan($kecamatan)
{
    $this->kelurahan = Kelurahan::where('kecamatan_id', $kecamatan)->get();
    $this->selectedKelurahan = NULL;
    $this->selectedRw = NULL;
}
public function updatedSelectedKelurahan($kelurahan)
{
    if (!is_null($kelurahan)) {
        $this->rw = Rw::where('kelurahan_id', $kelurahan)->get();
    }else{
        $this->selectedRw = NULL;
    }

}
}
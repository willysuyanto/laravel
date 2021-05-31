<?php

namespace App\Exports;

use App\Models\Pegawai as ModelsPegawai;
use Maatwebsite\Excel\Concerns\FromCollection;

class PegawaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelsPegawai::all();
    }
}

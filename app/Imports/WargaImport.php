<?php

namespace App\Imports;

use App\Models\Warga;
use Maatwebsite\Excel\Concerns\ToModel;

class WargaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Warga([
            'nik' => $row[0],
            'no_kk' => $row[1],
            'nama' => $row[2], 
            'ttl' => $row[3],
            'jk' => $row[4],
            //
        ]);
    }
}

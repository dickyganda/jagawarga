<?php

namespace App\Imports;

use App\Warga;
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
            'nik' => $row[1],
            'no_kk' => $row[2], 
            'jk' => $row[3],
            'ttl' => $row[4],
            //
        ]);
    }
}

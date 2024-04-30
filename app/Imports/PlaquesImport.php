<?php

namespace App\Imports;

use App\Models\PlacaFotov;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class PlaquesImport implements ToCollection, WithChunkReading
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            
            if ($row[0] != 'Any_Alta') {
                
                $ok = PlacaFotov::create([
                    'latitud' => $row[6],
                    'longitud' => $row[7],
                    'nom' => $row[4],
                    'tipus_equipament' => $row[1],
                    'adreca' => $row[5],
                    'nom_barri' => $row[11],
                    'energia_prod_kWh' => $row[13],
                    'potencia_kWp' => $row[12],
                    'emissions_estalv_KgCo2eq' => $row[15],
                ]);
            }
        }
    }

    public function chunkSize():int
    {
        return 1000;
    }
}

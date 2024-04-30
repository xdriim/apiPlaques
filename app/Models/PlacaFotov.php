<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacaFotov extends Model
{
    use HasFactory;

    protected $fillable = ['latitud', 'longitud', 'nom', 'tipus_equipament', 'adreca', 'nom_barri', 'energia_prod_kWh', 'potencia_kWp', 'emissions_estalv_KgCo2eq'];
}

<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PlaquesImport;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function placaImport()
    {
        Excel::import(new PlaquesImport, '2022_installacions_fotovoltaiques_municipals-.csv');
    }
}

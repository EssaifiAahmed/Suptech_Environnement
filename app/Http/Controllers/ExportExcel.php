<?php

namespace App\Http\Controllers;

use App\Exports\InscrireExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BourseExport;
use Illuminate\Http\Request;

class ExportExcel extends Controller 
{
    public function export($slug, $Filiere, $Ville) 
    {
        return Excel::download(new InscrireExport($Filiere, $Ville), 'Inscription_Liste.xlsx');
    }
    
    public function exportBourse($slug, $Type) 
    {
        return Excel::download(new BourseExport($Type), 'Inscription_Bourse.xlsx');
    }
}
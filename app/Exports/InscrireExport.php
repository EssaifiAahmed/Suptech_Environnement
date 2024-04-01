<?php

namespace App\Exports;

use App\Models\Inscrire;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class InscrireExport implements FromCollection, WithHeadings, ShouldAutoSize
{
private $Filiere;

private $Ville;

    public function __construct($Filiere, $Ville)
    {
        $this->Filiere = $Filiere;
        $this->Ville = $Ville;
    }

    public function collection()
    {   
        if($this->Filiere != 'AllFiliere' && $this->Ville != 'AllVille'){
            $data = Inscrire::select('Nom', 'Prenom', 'date_naissance', 'cni', 'CIN_MASSAR', 'Email', 'Tele', 'Sexe', 'Filiere', 'dip', 'ville', 'Adresse', 'nat', 'tsrc', 'created_at')
            ->where('Filiere', $this->Filiere)
            ->where('ville', $this->Ville)
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($row, $index) {
                return [
                    $index + 1,
                    $row->Nom,
                    $row->Prenom,
                    $row->date_naissance,
                    $row->cni,
                    $row->CIN_MASSAR,
                    $row->Sexe,
                    $row->Email,
                    $row->Tele,
                    $row->Filiere,
                    $row->dip,
                    $row->ville,
                    $row->Adresse,
                    $row->nat,
                    $row->tsrc,
                    $row->created_at,
                ];
            });
        }else{
            $data = Inscrire::select('Nom', 'Prenom', 'date_naissance', 'cni', 'CIN_MASSAR', 'Email', 'Tele', 'Sexe', 'Filiere', 'dip', 'ville', 'Adresse', 'nat', 'tsrc', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($row, $index) {
                return [
                    $index + 1,
                    $row->Nom,
                    $row->Prenom,
                    $row->date_naissance,
                    $row->cni,
                    $row->CIN_MASSAR,
                    $row->Sexe,
                    $row->Email,
                    $row->Tele,
                    $row->Filiere,
                    $row->dip,
                    $row->ville,
                    $row->Adresse,
                    $row->nat,
                    $row->tsrc,
                    $row->created_at,
                ];
            });
        }

        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'Nom',
            'Prénom',
            'Date De Naissance',
            'CIN/CNE',
            'Massar',
            'Genre',
            'Email',
            'Téléphone',
            'Filiere',
            'Dernier Diplôme Obtenu',
            'Ville de formation',
            'Adresse',
            'Nationalité',
            'Source',
            "Date D'envoi"
           
        ];
    }
}



<?php

namespace App\Exports;

use App\Models\bourses;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BourseExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    private $Type;

    public function __construct($Type)
    {
        $this->Type = $Type;
    }
    
    
    public function collection()
    {
        if($this->Type != 'All'){
            $data = bourses::select('Nom', 'email', 'cne', 'date_naissance', 'telephone', 'nom_pere_complet', 'cin_massar', 'adresse', 'profession', 'Sectors', 'type_bourse', 'compte_bancaire', 'nom_mere_complet', 'profession_mere', 'created_at')
                ->where('Sectors', $this->Type)
                ->get()
                ->map(function ($row, $index) {
                    return [
                        $index + 1,
                        $row->Nom,
                        $row->email,
                        $row->cne,
                        $row->date_naissance,
                        $row->telephone,
                        $row->nom_pere_complet,
                        $row->cin_massar,
                        $row->adresse,
                        $row->profession,
                        $row->Sectors,
                        $row->type_bourse,
                        $row->compte_bancaire,
                        $row->nom_mere_complet,
                        $row->profession_mere,
                        $row->created_at,
                    ];
                });
        }else{
            $data = bourses::select('Nom', 'email', 'cne', 'date_naissance', 'telephone', 'nom_pere_complet', 'cin_massar', 'adresse', 'profession', 'Sectors', 'type_bourse', 'compte_bancaire', 'nom_mere_complet', 'profession_mere', 'created_at')
            ->get()
            ->map(function ($row, $index) {
                return [
                    $index + 1,
                    $row->Nom,
                    $row->email,
                    $row->cne,
                    $row->date_naissance,
                    $row->telephone,
                    $row->nom_pere_complet,
                    $row->cin_massar,
                    $row->adresse,
                    $row->profession,
                    $row->Sectors,
                    $row->type_bourse,
                    $row->compte_bancaire,
                    $row->nom_mere_complet,
                    $row->profession_mere,
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
            'Email',
            'CNE',
            'Date de naissance',
            'Téléphone',
            'Nom complet du père',
            'CIN massar',
            'Adresse',
            'Profession ',
            'Sectors',
            "Type de bourse",
            'Compte bancaire',
            'Nom complet de la mère',
            'Profession mère',
            "Date d'envoi",
        ];
    }
}

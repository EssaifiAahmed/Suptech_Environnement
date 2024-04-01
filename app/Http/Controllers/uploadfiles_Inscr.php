<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\notes;
use App\Models\Inscrire;


class uploadfiles_Inscr extends Controller
{
    public function storefile(Request $request, $slug, $id)
    {

        
    $files = $request->file('releve');
    
        foreach ($files as $index => $file) {
            $fileName = 'relevé_' . ($index + 1) . '.pdf';
            $file->move(public_path('Dossiers_notes/'.$id), $fileName);
        } 

    
    DB::table('inscrires')
    ->where('cni', $id)
    ->update(['fichier_notes' => 'true']);

    
    $note = new notes;

    $note->note_s1 = $request->note_s1;
    $note->note_s2 = $request->note_s2;
    $note->moy_A1 = $request->note_A1;

    $note->note_s3 = $request->note_s3;
    $note->note_s4 = $request->note_s4;
    $note->moy_A2 = $request->note_A2;

    $note->note_s5 = $request->note_s5;
    $note->note_s6 = $request->note_s6;
    $note->moy_A3 = $request->note_A3;

    $note->note_s7 = $request->note_s7;
    $note->note_s8 = $request->note_s8;
    $note->moy_A4 = $request->note_A4;

    $note->note_s9 = $request->note_s9;
    $note->note_s10 = $request->note_s10;
    $note->moy_A5 = $request->note_A5;

    $inscrire = Inscrire::where('cni', $id)->first();
    $note->inscrire_id = $inscrire->cni;

    $note->save();
    
    // bach ncleari sesssion 
    session()->put('Inscr_auth', false);
    session()->forget('cni');
    session()->forget('message');



    return response()->json([
        'message' => 'Vos documents sont bien enregistrés'
    ], 200);

    }
}
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class uploadfiles extends Controller
{
    public function storefile(Request $request,$slug,$id){


      foreach ($request->file() as $name => $file) {

       $file->move(public_path('Dossiers_bourse/'.$id), $name.'.pdf');
    }
   
    DB::table('bourses')
    ->where('cne', $id)
    ->update(['fichier_complets' => 'true']);
    
    // bach ncleari sesssion 
    session()->put('bourse_auth', false);
    session()->forget('cne');
    session()->forget('message');

    return response()->json([
        'message' => 'Vos documents sont bien enregistrés'
    ], 200);



    }
}

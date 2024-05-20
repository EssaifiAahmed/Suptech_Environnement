<?php

namespace App\Http\Controllers;

use App\Models\bourses;
use App\Models\Inscrire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class InscriptionController extends Controller
{

    public function Insert(Request $request)
    {
        $Check_Inscription = Inscrire::where('Nom', $request->input('Nom'))
            ->where('Prenom', $request->input('Prenom'))
            ->where('CIN_MASSAR', $request->input('cin_massar'))
            ->where('Filiere', $request->input('Sectors'))
            ->first();
        if (!$Check_Inscription) {
            $Inscrire = new Inscrire;
            $Inscrire->Nom = $request->Nom;
            $Inscrire->Prenom = $request->Prenom;
            $Inscrire->CIN_MASSAR = $request->cin_massar;
            $Inscrire->Email = $request->email;
            $Inscrire->Tele = $request->telephone;
            $Inscrire->Sexe = $request->Sexe;
            $Inscrire->Filiere = $request->Sectors;
            $Inscrire->dip = $request->dip;
            $Inscrire->nat = $request->nat;
            $Inscrire->ville = $request->Ville;
            $Inscrire->Adresse = $request->adresse;

            if ($request->tsrc == 'facebook' || $request->tsrc == 'instagram' || $request->tsrc == 'linkedin' || $request->tsrc == 'abujad') {
                $Inscrire->tsrc = $request->tsrc;

            } else {
                $Inscrire->tsrc = null;

            }
            return response()->json([
                'pdf' => base64_encode($pdf->output()),
            ]);
            $Inscrire->save();
            $pdf = PDF::loadView('recu', compact('request'));
            //   return response($pdf->download('recu.pdf'))->header('Content-Type', 'application/pdf');

        } else {
            if (App::isLocale('fr')) {
                return response()->json([
                    'message' => 'Vous êtes déjà inscrit à cette formation',
                ], 200);
            } else if (App::isLocale('ar')) {
                return response()->json([
                    'message' => 'أنت مسجل بالفعل في هذه الدورة',
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Vous êtes déjà inscrit à cette formation',
                ], 200);
            }
        }
    }

    public function showRegisters()
    {
        if (Auth::check()) {
            $data = Inscrire::orderBy('id', 'DESC')->get();

            return view('admin/Incsription_liste', compact('data'))->with('panelactive', 'inscription_liste')->with('val', 1);
        } else {
            return view('admin/Login');
        }
    }

    public function DeleteRegister($slug, $id)
    {

        if (Auth::check()) {
            Inscrire::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully.');
        } else {return view('admin/Login');}
    }

    public function bourseInscription(Request $request)
    {
        $Check_Inscription_cne = bourses::where('cne', $request->cin)->first();
        $Check_Inscription_massar = bourses::where('cin_massar', $request->cin_massar)->first();
        $code_inscription = DB::table('inscrires')->pluck('code_inscription')->last();

        if ($Check_Inscription_cne && $Check_Inscription_massar) {
            // Return an error response if the email is already registered
            return response()->json([
                'error' => session()->get('locale') == 'fr' ? "Vous êtes déjà inscrit" : "أنت بالفعل مسجل مسبقا في المدرسة",
            ], 409); // 409 Conflict is a more appropriate status code for duplicate entries
        }

        $bourses = new bourses;
        $bourses->code_inscription = $code_inscription;
        $bourses->Nom = $request->Nom;
        $bourses->email = $request->email;
        $bourses->cne = $request->cin;
        $bourses->date_naissance = $request->date_naissance;
        $bourses->telephone = $request->telephone;
        $bourses->nom_pere_complet = $request->nom_pere_complet;
        $bourses->cin_massar = $request->cin_massar;
        $bourses->adresse = $request->adresse;
        $bourses->profession = $request->profession;
        $bourses->nom_mere_complet = $request->ncm;
        $bourses->profession_mere = $request->profession_mere;
        $bourses->nom_tuteur_complet = $request->nct;
        $bourses->profession_tuteur = $request->profession_tuteur;

        $bourses->save();

        // Generate PDF
        $code_inscription_recu = DB::table('bourses')->pluck('code_inscription')->last();
        $pdf = PDF::loadView('recu_bourse', ['request' => $request, 'code_inscription_recu' => $code_inscription_recu]);

        // Return a success response with the PDF and message
        return response()->json([
            'recu_bourse' => base64_encode($pdf->output()),
            'message' => session()->get('locale') == 'fr' ?
            "Vous êtes désormais inscrit à la bourse" :
            "لقد تم تسجيلك بنجاح",
        ], 200);
    }

    public function CheckUserLoginBourse()
    {
        if (Auth::check()) {
            $data = bourses::orderBy('id', 'DESC')->get();

            return view('admin/Bourse_liste', compact('data'))->with('panelactive', 'inscription_Bourse')->with('val', 1);

        }
        return view('admin/Login');

    }

    public function getRegisterPDF($slug, $id)
    {
        $request = Inscrire::findOrFail($id);
        $code_inscription = DB::table('inscrires')->pluck('code_inscription')->last();
        $pdf = PDF::loadView('admin/recu', ['request' => $request, 'code_inscription' => $code_inscription]);

        return $pdf->download($request->Nom . ' ' . $request->Prenom . '_inscription.pdf');
    }

}

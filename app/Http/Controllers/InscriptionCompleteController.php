<?php

namespace App\Http\Controllers;

use App\Models\Inscrire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use PDF;

class InscriptionCompleteController extends Controller
{

    public function Insert(Request $request)
    {
        $flag_inscription = false;
        $Check_Inscription = Inscrire::where('CIN_MASSAR', $request->input('cin_massar'))
            ->where('Filiere', $request->input('Sectors'))
            ->first();
        $code_inscription = date('dmY') . substr(str_shuffle(MD5(microtime())), 0, 4);

        if (!$Check_Inscription) {
            $Inscrire = new Inscrire;
            $Inscrire->code_inscription = $code_inscription;
            $Inscrire->Nom = $request->Nom;
            $Inscrire->Prenom = $request->Prenom;
            $Inscrire->cni = $request->cin;
            $Inscrire->date_naissance = $request->yyyy . '-' . $request->mm . '-' . $request->dd;
            $Inscrire->CIN_MASSAR = $request->cin_massar;
            $Inscrire->Email = $request->email;
            $Inscrire->Tele = $request->telephone;
            $Inscrire->Sexe = $request->Sexe;
            $Inscrire->Filiere = $request->Sectors;
            $Inscrire->bourse = $request->select_bourse;
            $Inscrire->dip = $request->dip;
            $Inscrire->nat = $request->nat;
            $Inscrire->ville = $request->Ville;
            $Inscrire->Adresse = $request->adresse;
            if ($request->tsrc == 'facebook' || $request->tsrc == 'instagram' || $request->tsrc == 'linkedin' || $request->tsrc == 'abujad') {
                $Inscrire->tsrc = $request->tsrc;
            } else {
                $Inscrire->tsrc = null;
            }
            $Inscrire->save();
            $code_inscription_recu_inscri = DB::table('inscrires')->pluck('code_inscription')->last();
            $pdf_inscription = PDF::loadView('recu_inscri_with_bource', ['request' => $request, 'code_inscription_recu_inscri' => $code_inscription_recu_inscri]);
            $flag_inscription = true;
            if ($flag_inscription) {
                if (session()->get('locale') == 'fr') {
                    return response()->json([
                        'pdf_inscription' => base64_encode($pdf_inscription->output()),
                        // 'pdf_bourse' => base64_encode($pdf_bourse->output()),
                        'message' => "Vous êtes bien inscrit vous pouvez s'inscrire au bourse avec votre code d'inscription",
                        // 'message_bourse'=>$message_bourse
                    ], 200);
                }

                if (session()->get('locale') == 'ar') {
                    return response()->json([
                        'pdf_inscription' => base64_encode($pdf_inscription->output()),
                        // 'pdf_bourse' => base64_encode($pdf_bourse->output()),
                        'message' => 'تم تقديم طلبكم يمكنكم التسجيل في المنحة إعتمادا على رقم التسجيل الخاص بكم',
                        // 'message_bourse'=>$message_bourse
                    ], 200);
                }
            } else {

                if (session()->get('locale') == 'fr') {
                    return response()->json([
                        'message_deja' => "Vous êtes déja inscrit",
                    ], 200);
                }
                if (session()->get('locale') == 'ar') {return response()->json([
                    'message_deja' => "أنت بالفعل مسجل مسبقا في المدرسة",
                ], 200);}
            }
        }
    }
    public function CheckUserInscrit(Request $request)
    {

        $Check_Inscription2 = Inscrire::where('code_inscription', $request->code_inscription)
            ->where('cni', $request->cin)
            ->where('date_naissance', $request->date_naissance)
            ->where('fichier_notes', null)
            ->first();

        $doc_Insc = [
            'Vos Relevés de notes disponibles',

        ];

        $doc_Insc_ar = [
            "ملفات النقط المتاحة",
        ];

        $message_Inscr;
        $message_Inscr_ar;

        if ($Check_Inscription2) {

            $message_Inscr = $doc_Insc;
            $message_Inscr_ar = $doc_Insc_ar;

            // bach nsavi les données f session :
            session()->put('Inscr_auth', true);
            session()->put('cni', $request->cin);
            session()->put('message', $message_Inscr);
            session()->put('message_ar', $message_Inscr_ar);

            return redirect()->route('FilesInscription', ['slug' => session()->get('locale')]);

        } else {
            if (session()->get('locale') == 'fr') {

                return redirect()->route('SuiviInscription', ['slug' => session()->get('locale')])->with('status', 'Vous n\'êtes pas encore inscrit à aucune filière / Vous avez déjà chargé vos relevés de notes');

            } else if (session()->get('locale') == 'ar') {

                return redirect()->route('SuiviInscription', ['slug' => session()->get('locale')])->with('status', 'تم رفع كل ملفاتكم/ أنت لست مسجل  ');
            }
        }
    }

    public function checkInscription(Request $request)
    {
        $errorMessage = __('Votre code inscription incorrect ou bien Vous n\'êtes pas inscrit avec la bourse'); // Default error message in French
        // Check session locale and set appropriate error message
        if (session()->get('locale') == 'ar') {
            $errorMessage = __('رقم التسجيل الخاص بكم غير صحيح أو قمت بالتسجيل بدون منحة');
        }

        try {
            $code_inscr = Inscrire::where('code_inscription', $request->code_inscription)
                ->where('bourse', 'bourse_oui')
                ->first();
            if ($code_inscr) {
                return redirect()->route('bourse_inscription', ['slug' => session()->get('locale')]);
            } else {
                return redirect()->back()->with('status', $errorMessage);
            }
        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }

    public function indexCheckInscription()
    {
        return view('check_bourse');
    }

    public function downloadNotesFiles($Lang, $userCNI)
    {
        // Retrieve the user's folder path based on the $userCNE
        $folderPath = public_path('Dossiers_notes/' . $userCNI);

        // Zip the folder contents
        $zipFile = public_path('Dossiers_notes/' . $userCNI . '.zip');
        $zip = new \ZipArchive();
        $zip->open($zipFile, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $files = glob($folderPath . '/*.pdf');
        foreach ($files as $file) {
            $fileName = basename($file);
            $zip->addFile($file, $fileName);
        }

        $zip->close();

        // Download the zip file
        return Response::download($zipFile)->deleteFileAfterSend(true);
    }
}

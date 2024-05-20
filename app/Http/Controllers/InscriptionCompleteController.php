<?php

namespace App\Http\Controllers;

use App\Models\Inscrire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use PDF;

class InscriptionCompleteController extends Controller
{

    public function Insert(Request $request)
    {
        // Generate a new inscription code
        $code_inscription = date('dmY') . substr(str_shuffle(MD5(microtime())), 0, 4);

        // Check if an inscription with the same email already exists
        $Check_Inscription = Inscrire::where('Nom', $request->Nom)
        ->where('Prenom', $request->Prenom)
        ->where('Email', $request->email)
        ->where('Filiere', $request->Sectors)
        ->first();

        if ($Check_Inscription) {
            // Return an error response if the email is already registered
            return response()->json([
                'error' => session()->get('locale') == 'fr' ? "Vous êtes déjà inscrit" : "أنت بالفعل مسجل مسبقا في المدرسة",
            ], 409); // 409 Conflict is a more appropriate status code for duplicate entries
        }

        // Create a new inscription
        $Inscrire = new Inscrire;
        $Inscrire->code_inscription = $code_inscription;
        $Inscrire->Nom = $request->Nom;
        $Inscrire->Prenom = $request->Prenom;
        $Inscrire->Email = $request->email;
        $Inscrire->Tele = $request->telephone;
        $Inscrire->Filiere = $request->Sectors;
        $Inscrire->bourse = $request->select_bourse;
        $Inscrire->ville = $request->Ville;
        $Inscrire->tsrc = in_array($request->tsrc, ['facebook', 'instagram', 'linkedin', 'abujad']) ? $request->tsrc : null;
        $Inscrire->save();

        // Generate the PDF receipt
        $pdf_inscription = PDF::loadView('recu_inscri_with_bource', ['request' => $request, 'code_inscription_recu_inscri' => $code_inscription]);

        // Return a success response with the PDF and message
        return response()->json([
            'pdf_inscription' => base64_encode($pdf_inscription->output()),
            'message' => session()->get('locale') == 'fr' ?
            "Vous êtes désormais inscrit. Pour vous inscrire à la bourse, utilisez le code d'inscription figurant sur le reçu qui sera automatiquement téléchargé après votre pré-inscription." :
            "لقد تم تسجيلك بنجاح. يمكنك التسجيل في المنحة باستخدام رمز التسجيل الموجود في الإيصال الذي سيتم تنزيله تلقائيًا بعد التسجيل المبدئي",
        ], 200);
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bourses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use PDF;


class BourseController extends Controller
{
    
    public function DeleteRegisterBourse($slug,$id){     

          if(Auth::check()){
            bourses::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully.');}
    else{
        return view('admin/Login');
    }
}

    public function CheckUserBourse(Request $request){
        $Check_Inscription = bourses::where('code_inscription', $request->code_inscription)
        ->where('cne', $request->cin)
        ->where('date_naissance', $request->date_naissance)
        ->where('fichier_complets',null)->first();

        

        $commerçantMsg_fr=[
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            'L\'indicateur socio-économique (RSU) de votre père',
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            ];
       
        $commerçantMsg_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            " بطاقة الهوية الوطنية للأب (CIN)" ,
            'المؤشر الإجتماعي و الإقتصادي الخاص بوالدك',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        $salarieMsg_fr=[
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "L'indicateur socio-économique (RSU) de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $salarieMsg_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            " بطاقة الهوية الوطنية للأب (CIN)" ,
            'المؤشر الإجتماعي و الإقتصادي الخاص بوالدك',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
            ];

        $fonctionnaireMsg_fr=[
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "L'indicateur socio-économique (RSU) de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $fonctionnaireMsg_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            " بطاقة الهوية الوطنية للأب (CIN)" ,
            'المؤشر الإجتماعي و الإقتصادي الخاص بوالدك',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
            ];

        $retraiteMsg_fr=[
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "L'indicateur socio-économique (RSU) de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];
                
        $retraiteMsg_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            " بطاقة الهوية الوطنية للأب (CIN)" ,
            'المؤشر الإجتماعي و الإقتصادي الخاص بوالدك',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
            ];

        $Parent_sans_activite_professionnelleMsg_fr=[
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "L'indicateur socio-économique (RSU) de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];
                
        $Parent_sans_activite_professionnelleMsg_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            " بطاقة الهوية الوطنية للأب (CIN)" ,
            'المؤشر الإجتماعي و الإقتصادي الخاص بوالدك',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
            ];


                            
        $Parent_dans_la_profession_liberaleMsg_fr= [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "L'indicateur socio-économique (RSU) de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours', 
        ];
             
        
        $Parent_dans_la_profession_liberaleMsg_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            " بطاقة الهوية الوطنية للأب (CIN)" ,
            'المؤشر الإجتماعي و الإقتصادي الخاص بوالدك',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
          ];
          
          $Parent_decede_fr=[
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            "certificat de décès",
            "L'indicateur socio-économique (RSU) de votre mère ou tout soutien de famille en cas de décès de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];
                
        $Parent_decede_ar = [
            "استمارة طلب المنحة(FDB)",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
            "شهادة الوفاة",
            "المؤشر الإجتماعي و الإقتصادي الخاص بوالدتك أو أي معيل في حالة وفاة والدك ",
        ];

        $message_bourse;
        $message_bourse_ar;

        if($Check_Inscription){
            $profession = bourses::select('profession')->where('cne', $request->cin)->where('date_naissance', $request->date_naissance)->first();


//error_log($profession);
            if($profession->profession == 'Parent commerçant'){

                $message_bourse = $commerçantMsg_fr;
                $message_bourse_ar= $commerçantMsg_ar;
            }else if($profession->profession == 'Parent fonctionnaire'){
                
                $message_bourse = $fonctionnaireMsg_fr;
                $message_bourse_ar=$fonctionnaireMsg_ar;

            }else if($profession->profession == 'Parent salarié'){
                $message_bourse = $salarieMsg_fr;
                $message_bourse_ar= $salarieMsg_ar;
            }else if($profession->profession == 'Parent retraité'){
                $message_bourse = $retraiteMsg_fr;
                $message_bourse_ar= $retraiteMsg_ar;
            }else if($profession->profession == 'Parent dans la profession libérale'){
                $message_bourse = $Parent_dans_la_profession_liberaleMsg_fr;
                $message_bourse_ar=$Parent_dans_la_profession_liberaleMsg_ar;
            }else if($profession->profession == 'Parent sans activité professionnelle'){
                $message_bourse = $Parent_sans_activite_professionnelleMsg_fr;
                $message_bourse_ar= $Parent_sans_activite_professionnelleMsg_ar;
            }else if($profession->profession == 'Parent décédé'){
                $message_bourse = $Parent_decede_fr;
                $message_bourse_ar= $Parent_decede_ar;
            }
// bach nsavi les données f session : 
            session()->put('bourse_auth',true);
            session()->put('cne',$request->cin);
            session()->put('message',$message_bourse);
            session()->put('message_ar',$message_bourse_ar);



            return redirect()->route('filesbourse', ['slug' => session()->get('locale')]);

          //  return redirect()->route('test', ['slug' =>session()->get('locale'),'cne' => $request->cin, 'message' => $message_bourse]);

           // return view('test', ['slug' =>session()->get('locale'),'cne' => $request->cin,'message' => $message_bourse,]);
           // 
            //return view('test', ['cne' => $request->cin, 'message' => $message_bourse]);

        }else{
            if(session()->get('locale') =='fr'){
            
            
                return redirect()->route('Suivi', ['slug' => session()->get('locale')])->with('status', 'Vous n\'êtes pas inscrit dans la Bourse / Vous avez déjà chargé vos documents');
    
            

            }else if(session()->get('locale') =='ar'){

                return redirect()->route('Suivi', ['slug' => session()->get('locale')])->with('status', 'تم رفع كل ملفاتكم/ أنت لست مسجل في المنحة');              
            }
        }
    }
    

    public function downloadBourseFiles($Lang, $userCNE)
    {
        // Retrieve the user's folder path based on the $userCNE
        $folderPath = public_path('Dossiers_bourse/' . $userCNE);
    
        // Zip the folder contents
        $zipFile = public_path('Dossiers_bourse/' . $userCNE . '.zip');
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
    
    public function getRegisterPDF($slug, $id){
        $request = bourses::findOrFail($id);
        $code_inscription_bourse = DB::table('bourses')->pluck('code_inscription')->first();
        $pdf = PDF::loadView('admin/recu_bourse', ['request' => $request, 'code_inscription_bourse' => $code_inscription_bourse]);

        return $pdf->download($request->Nom.'_Bourse.pdf');
    }

}

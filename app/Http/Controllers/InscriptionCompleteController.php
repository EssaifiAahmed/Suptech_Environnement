<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscrire;
use App\Models\bourses;
use PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class InscriptionCompleteController extends Controller
{

    public function Insert(Request $request)
    {

        $commerçantMsg_fr=[
            "•Fiche demande de bourse (FDB)
            •La Carte d’Identité Nationale (CIN) Etudiant
            •La Carte d’Identité Nationale (CIN) père
            •L\'indicateur socio-économique (RSU) de votre père
            •une lettre de motivation
            •pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours"
            ];
    
        $commerçantMsg_ar = [
            "استمارة طلب المنحة
            بطاقة الهوية الوطنية للطالب (CIN)
            بطاقة الهوية الوطنية للأب (CIN)
            المؤشر الإجتماعي و الإقتصادي الخاص بوالدك
            رسالة تحفيزية
            للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية"
        ];

        $salarieMsg_fr=[
            "•Fiche demande de bourse (FDB)
            •La Carte d’Identité Nationale (CIN) Etudiant
            •La Carte d’Identité Nationale (CIN) père,
            •L\'indicateur socio-économique (RSU) de votre père
            •une lettre de motivation,
            •pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours"
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
            "•Fiche demande de bourse (FDB)",
            "•La Carte d’Identité Nationale (CIN) Etudiant",
            '•La Carte d’Identité Nationale (CIN) père',
            "•L'indicateur socio-économique (RSU) de votre père",
            '•une lettre de motivation',
            '•pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $fonctionnaireMsg_ar = [
            "استمارة طلب المنحة
            بطاقة الهوية الوطنية للطالب (CIN)
            بطاقة الهوية الوطنية للأب (CIN)
            المؤشر الإجتماعي و الإقتصادي الخاص بوالدك
            رسالة تحفيزية
            للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية"
            ];

        $retraiteMsg_fr=[
            "•Fiche demande de bourse (FDB)
            •La Carte d’Identité Nationale (CIN) Etudiant
            •La Carte d’Identité Nationale (CIN) père
            •L'indicateur socio-économique (RSU) de votre père
            •une lettre de motivation
            •pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours"
        ];
                
        $retraiteMsg_ar = [
            "استمارة طلب المنحة
            بطاقة الهوية الوطنية للطالب (CIN)
            بطاقة الهوية الوطنية للأب (CIN)
            لمؤشر الإجتماعي و الإقتصادي الخاص بوالدك
            رسالة تحفيزية
            للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية"
            ];

        $Parent_sans_activite_professionnelleMsg_fr=[
            "•Fiche demande de bourse (FDB)
            •La Carte d’Identité Nationale (CIN) Etudiant
            •La Carte d’Identité Nationale (CIN) père
            •L\'indicateur socio-économique (RSU) de votre père
            •une lettre de motivation
            •pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours"
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
            "•Fiche demande de bourse (FDB)
            •La Carte d’Identité Nationale (CIN) Etudiant
            •La Carte d’Identité Nationale (CIN) père
            •L'indicateur socio-économique (RSU) de votre père
            •une lettre de motivation
            •pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours"
        ];
            
        
        $Parent_dans_la_profession_liberaleMsg_ar = [
            "استمارة طلب المنحة
            بطاقة الهوية الوطنية للطالب (CIN)
            بطاقة الهوية الوطنية للأب (CIN)
            المؤشر الإجتماعي و الإقتصادي الخاص بوالدك
            رسالة تحفيزية
            للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية"
        ];
        
        $Parent_decede_fr=[
            "•Fiche demande de bourse (FDB)
            •La Carte d’Identité Nationale (CIN) Etudiant
            •certificat de décès
            •L'indicateur socio-économique (RSU) de votre mère ou tout soutien de famille en cas de décès de votre père
            •une lettre de motivation,
            •pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours"
        ];
                
        $Parent_decede_ar = [
            "استمارة طلب المنحة(FDB)
            بطاقة الهوية الوطنية للطالب (CIN)
            رسالة تحفيزية
            للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية
            شهادة الوفاة
            المؤشر الإجتماعي و الإقتصادي الخاص بوالدتك أو أي معيل في حالة وفاة والدك" 
        ];
        
    
        // $message_bourse;

        try {
            if($request->select_bourse=='bourse_oui'){

                if(session()->get('locale') =='fr' && $request->profession=='Parent commerçant'){
                 
                 $message_bourse=$commerçantMsg_fr;
                }
               
                else if(session()->get('locale') =='ar' && $request->profession=='Parent commerçant'){
                    $message_bourse=$commerçantMsg_ar;
            
                }
            
            
                else if(session()->get('locale') =='fr' && $request->profession=='Parent fonctionnaire'){
                    $message_bourse=$fonctionnaireMsg_fr;
                }
                else if(session()->get('locale') =='ar' && $request->profession=='Parent fonctionnaire'){
                    $message_bourse=$fonctionnaireMsg_ar;
                }
            
                else if(session()->get('locale') =='fr' && $request->profession=='Parent salarié'){
                    $message_bourse=$salarieMsg_fr;
                }
                else if(session()->get('locale') =='ar' && $request->profession=='Parent salarié'){
                    $message_bourse=$salarieMsg_ar;
                }
            
            
                else if(session()->get('locale') =='fr' && $request->profession=='Parent retraité'){
                    $message_bourse=$retraiteMsg_fr;
                }
                else if(session()->get('locale') =='ar' && $request->profession=='Parent retraité'){
                    $message_bourse=$retraiteMsg_ar;
                }
            
            
                else if(session()->get('locale') =='fr' && $request->profession=='Parent dans la profession libérale'){
                    $message_bourse=$Parent_dans_la_profession_liberaleMsg_fr;
                }
                else if(session()->get('locale') =='ar' && $request->profession=='Parent dans la profession libérale'){
                    $message_bourse=$Parent_dans_la_profession_liberaleMsg_ar;
                }
            
            
                else if(session()->get('locale') =='fr' && $request->profession=='Parent sans activité professionnelle'){
                    $message_bourse=$Parent_sans_activite_professionnelleMsg_fr;
                }
                else if(session()->get('locale') =='ar' && $request->profession=='Parent sans activité professionnelle'){
                    $message_bourse=$Parent_sans_activite_professionnelleMsg_ar;
                }else if(session()->get('locale') =='fr' && $request->profession=='Parent décédé'){
                    $message_bourse=$Parent_decede_fr;
                }else if(session()->get('locale') =='ar' && $request->profession=='Parent décédé'){
                    $message_bourse=$Parent_decede_ar;
                }
            
            
                $flag_inscription=false;
                $Check_Inscription = Inscrire::where('CIN_MASSAR', $request->input('cin_massar'))
                ->where('Filiere', $request->input('Sectors'))
                ->first();
            
                // $Check_Inscription_cne_bourse = bourses::where('cne', $request->cin)
                // ->first();
                // $Check_Inscription_massar_bourse = bourses::where('cin_massar', $request->cin_massar)
                // ->first();
            
                $code_inscription = date('dmY') . substr(str_shuffle(MD5(microtime())), 0, 4);
            
                if(!$Check_Inscription) {
                    $Inscrire = new Inscrire;
                    $Inscrire->code_inscription = $code_inscription;
                    $Inscrire->Nom = $request->Nom;
                    $Inscrire->Prenom = $request->Prenom;
                    $Inscrire->cni = $request->cin;
                    $Inscrire->date_naissance = $request->yyyy.'-'.$request->mm.'-'.$request->dd;
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
                    if($request->tsrc == 'facebook' || $request->tsrc == 'instagram' || $request->tsrc == 'linkedin'  || $request->tsrc == 'abujad' ){
                        $Inscrire->tsrc = $request->tsrc;
                    }else {
                        $Inscrire->tsrc = null;     
                    }
            
            
                    $Inscrire->save();
            
                    $code_inscription_recu_inscri = DB::table('inscrires')->pluck('code_inscription')->last();
                    $pdf_inscription = PDF::loadView('recu_inscri_with_bource', ['request' => $request, 'code_inscription_recu_inscri' => $code_inscription_recu_inscri]);
                    $flag_inscription=true;
            
                }
            
              
            
                // if(!$Check_Inscription_cne_bourse && !$Check_Inscription_massar_bourse){
                    
                //     $bourses = new bourses;
                //     $bourses->code_inscription = $code_inscription;
                //     $bourses->Nom =$request->Nom;
                //     $bourses->email = $request->email;
                //     $bourses->cne = $request->cin;
                //     $bourses->date_naissance = $request->yyyy.'-'.$request->mm.'-'.$request->dd;
                //     $bourses->telephone = $request->telephone;
                //     $bourses->nom_pere_complet = $request->nom_pere_complet;
                //     $bourses->cin_massar =$request->cin_massar;
                //     $bourses->adresse =$request->adresse;
                //     $bourses->profession = $request->profession;
                //     $bourses->Sectors =$request->Sectors; 
                //     $bourses->type_bourse = $request->type_bourse;
                //     $bourses->compte_bancaire = $request->compte_bancaire;
                //     $bourses->nom_mere_complet= $request->ncm;
                //     $bourses->profession_mere = $request->profession_mere;
                //     // $bourses->nom_mere_complet = $request->ncm;
                //     //$bourses->profession_mere = $request->profession_mere;
               
                //     $bourses->save();
                //     $code_inscription_recu_bourse = DB::table('bourses')->pluck('code_inscription')->last();
                //     $pdf_bourse = PDF::loadView('recu_bourse', ['request' => $request, 'code_inscription_recu_bourse' => $code_inscription_recu_bourse]);
                //     $flag_bourse=true;
                    
            
                // }
              
                if($flag_inscription ) {
            
                    if(session()->get('locale') =='fr'){
                        return response()->json([
                            'pdf_inscription' => base64_encode($pdf_inscription->output()),
                            // 'pdf_bourse' => base64_encode($pdf_bourse->output()),
                            'message' => "Vous êtes bien inscrit vous pouvez s'inscrire au bourse avec votre code d'inscription",
                            // 'message_bourse'=>$message_bourse
                        ], 200);}

                        if(session()->get('locale') =='ar'){
                            return response()->json([
                                'pdf_inscription' => base64_encode($pdf_inscription->output()),
                                // 'pdf_bourse' => base64_encode($pdf_bourse->output()),
                                'message' => 'تم تقديم طلبكم يمكنكم التسجيل في المنحة إعتمادا على رقم التسجيل الخاص بكم',
                                // 'message_bourse'=>$message_bourse
                            ], 200);}
                }
                // if($flag_bourse) {
            
            
                //     if(session()->get('locale') =='fr'){
                //     return response()->json([
                //         'pdf_bourse' => base64_encode($pdf_bourse->output()),
                //         'message' => "Vous êtes  déja  inscrit à l'école  mais vous venez s'inscrire à la bourse ",
                //         'message_bourse'=>$message_bourse
                //     ], 200);
                // }
            
                // if(session()->get('locale') =='ar'){
                //     return response()->json([
                //         'pdf_bourse' => base64_encode($pdf_bourse->output()),
                //         'message' => "أنت مسجل بالفعل في المدرسة ولكنك تم تقديم طلبكم  للتسجيل في المنحة الدراسية  ",
                //         'message_bourse'=>$message_bourse
                //     ], 200);
            
            
                // }
            
                // }
                else{  
                    
                    if(session()->get('locale') =='fr') {
                        return response()->json([
                        'message_deja' => "Vous êtes déja inscrit"
                    ], 200);
                    }
                        if(session()->get('locale') =='ar') {return response()->json([       
                            'message_deja' => "أنت بالفعل مسجل مسبقا في المدرسة"
                        ], 200);
                    }
                }
            }
            
            else if ($request->select_bourse=='bourse_non')
            {
                $Check_Inscription = Inscrire::where('CIN_MASSAR', $request->input('cin_massar'))
                ->where('Filiere', $request->input('Sectors'))
                ->first();
                if(!$Check_Inscription){
                
                    $Inscrire = new Inscrire;
                    $Inscrire->code_inscription = date('dmY') . substr(str_shuffle(MD5(microtime())), 0, 4);
                    $Inscrire->Nom = $request->Nom;
                    $Inscrire->Prenom = $request->Prenom;
                    $Inscrire->cni = $request->cin;
                    $Inscrire->date_naissance = $request->yyyy.'-'.$request->mm.'-'.$request->dd;
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
                    if($request->tsrc == 'facebook' || $request->tsrc == 'instagram' || $request->tsrc == 'linkedin'  || $request->tsrc == 'abujad' ){
                        $Inscrire->tsrc = $request->tsrc;
                    }else {
                        $Inscrire->tsrc = null;     
                    }
                    $Inscrire->save();
                
                    $code_inscription_recu_non_bourse = DB::table('inscrires')->pluck('code_inscription')->last();
                    $pdf = PDF::loadView('recu', ['request' => $request, 'code_inscription_recu_non_bourse' => $code_inscription_recu_non_bourse]);
                    if(session()->get('locale') =='fr'){
                        return response()->json([
                        'pdf_inscription' => base64_encode($pdf->output()),
                        'message' => 'Votre inscription est bien enregistrée'
                    ]);}
                
                    if(session()->get('locale') =='ar'){
                        return response()->json([
                        'pdf_inscription' => base64_encode($pdf->output()),
                        'message' => 'تم تسجيل طلبكم بنجاح'
                    ]);}
                } else {
                    if (session()->get('locale') =='fr'){
                        return response()->json([
                            'message_deja' => 'Vous êtes déjà inscrit à cette formation'
                        ], 200);
                    }else if(session()->get('locale') =='ar'){
                        return response()->json([
                            'message_deja' => 'أنت مسجل بالفعل في هذه الدورة'
                        ], 200);
                    }else{
                        return response()->json([
                            'message_deja' => 'Vous êtes déjà inscrit à cette formation'
                        ], 200);
                    } 
                }
            } 
        }catch (\Throwable $th) {
            $th->getMessage();
        }

    }
    public function CheckUserInscrit(Request $request){

        $Check_Inscription2 = Inscrire::where('code_inscription', $request->code_inscription)
        ->where('cni', $request->cin)
        ->where('date_naissance', $request->date_naissance)
        ->where('fichier_notes',null)
            ->first();
        
            $doc_Insc=[
            'Vos Relevés de notes disponibles'
       
 
              ];
     
              $doc_Insc_ar = [
                "ملفات النقط المتاحة",
            ];
                           

        $message_Inscr;
        $message_Inscr_ar;

        if($Check_Inscription2){
             
                $message_Inscr = $doc_Insc;
                $message_Inscr_ar = $doc_Insc_ar;
            

          
            // bach nsavi les données f session : 
            session()->put('Inscr_auth',true);
            session()->put('cni',$request->cin);
            session()->put('message',$message_Inscr);
            session()->put('message_ar',$message_Inscr_ar);



            return redirect()->route('FilesInscription', ['slug' => session()->get('locale')]);

        }else{
            if(session()->get('locale') =='fr'){
            
            
                return redirect()->route('SuiviInscription', ['slug' => session()->get('locale')])->with('status', 'Vous n\'êtes pas encore inscrit à aucune filière / Vous avez déjà chargé vos relevés de notes');
    
            

            }else if(session()->get('locale') =='ar'){

                return redirect()->route('SuiviInscription', ['slug' => session()->get('locale')])->with('status', 'تم رفع كل ملفاتكم/ أنت لست مسجل  ');              
            }
        }
    }

    public function checkInscription(Request $request)
    {
        $errorMessage = __('Votre code inscription incorrect ou bien Vous n\'êtes pas inscrit avec la bourse'); // Default error message in French            
        // Check session locale and set appropriate error message
        if(session()->get('locale') =='ar'){
            $errorMessage = __('رقم التسجيل الخاص بكم غير صحيح أو قمت بالتسجيل بدون منحة');
        }

        try {
            $code_inscr = Inscrire::where('code_inscription', $request->code_inscription)
            ->where('bourse', 'bourse_oui')
            ->first();        
            if ($code_inscr) 
            {
                return redirect()->route('bourse_inscription', ['slug' => session()->get('locale')]);   
            }
            else 
            {
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
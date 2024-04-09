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

public function Insert(Request $request){

        

     $commerçantMsg_fr="• La Carte d’Identité Nationale (CIN) <br>
     • Une attestation de revenu global délivrée par les services fiscaux compétents.<br>
     • Les statuts de la société si celle-ci a été constituée.<br>
     • Une inscription valide au registre du commerce en vigueur.<br>
     • Une quittance de la patente pour l'année en cours.<br>
     • Les six derniers relevés bancaires pour les comptes personnels et professionnels liés à
     l'entreprise";
     
    $commerçantMsg_ar="
    <br> • (CIN) بطاقة التعريف الوطنية
    <br> • شهادة الدخل الإجمالي المصدرة من الجهات الضريبية المختصة.
     <br>• النظام الأساسي للشركة في حال تأسست الشركة.
     <br>• تسجيل صالح في سجل التجارة النافذ.
     <br>• إيصال البطاقة المهنية للعام الجاري.
    
     <br>• آخر ستة كشوفات بنكية للحسابات الشخصية والمهنية المرتبطة بالشركة   
     ";
 
      $salarieMsg_fr="
      • La Carte d’Identité Nationale (CIN) <br>
     • Un document officiel de l'employeur attestant de votre emploi, incluant votre date
     d'embauche, votre poste et votre salaire mensuel net (Attestation de travail).<br>
     • Les trois derniers bulletins de salaire signés et tamponnés par l'employeur.<br>
     • Une attestation de déclaration des salaires (récapitulatif de carrière) émise par la Caisse
     Nationale de Sécurité Sociale (CNSS).<br>
     • Une attestation de revenus globaux délivrée par l'administration fiscale.<br>
     • Les six derniers relevés de compte bancaire cachetés par votre banque (incluant votre
     compte courant ainsi que votre compte épargne si vous en possédez un)." ;
 
     
      $salarieMsg_ar="
      <br> • (CIN) بطاقة التعريف الوطنية
     <br> • شهادة بالدخل الإجمالي المصدرة من الجهات الضريبية المختصة.<br>
     <br>• نظام الشركة إذا تم تأسيسها.<br>
     <br>• تسجيل صالح في السجل التجاري الحالي.<br>
     <br> • وصل دفع ضريبة البطاقة المهنية للعام الحالي.<br>
     • البيانات المصرفية لآخر 6 أشهر للحسابات الشخصية والمهنية المرتبطة بالشركة.<br>
     ";
 
       $fonctionnaireMsg_fr="
       • La Carte d’Identité Nationale (CIN) <br>
     • Une lettre officielle de votre employeur confirmant votre emploi actuel et la durée de votre
     contrat. (Attestation de travail).<br>
     • Une attestation de rémunération indiquant le montant de votre salaire mensuel brut et net
     ainsi que les avantages en nature éventuels (Attestation de salaire).<br>
     • Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne, certifiés et
     tamponnés par votre banque.<br>
     • Les 3 derniers relevés de paie, détaillant vos revenus bruts et nets, les cotisations sociales et
     fiscales, ainsi que les primes ou indemnités éventuelles.";
 
      $fonctionnaireMsg_ar="
      <br> • (CIN) بطاقة التعريف الوطنية
     <br> • رسالة رسمية من جهة العمل تؤكد على وظيفتك الحالية ومدة عقدك (شهادة العمل).<br>
     <br> • شهادة الأجر توضح مبلغ أجرك الإجمالي والصافي الشهري والإضافات العينية إن وجدت (شهادة الأجر).<br>
     <br> • البيانات المصرفية لآخر 6 أشهر لحساباتك الجارية وحسابات التوفير، مصدقة ومختومة من قبل بنكك.<br>
    <br> • آخر 3 كشوفات الرواتب، توضح إجمالي الدخل والصافي والمساهمات الاجتماعية والضريبية، وأي مكافآت أو بدلات إضافية إن وجدت.<br>
    ";
 
 
 
 
     $retraiteMsg_fr="
     • La Carte d’Identité Nationale (CIN) <br>
     • Une attestation de revenu global émise par les services fiscaux pour l'année fiscale en cours.<br>
     • Des justificatifs récents de pension ou de rente émis par des organismes de sécurité sociale
     tels que la CNSS, la CIMR ou la RCAR.<br>
     • Les six derniers relevés de compte bancaire officiels et validés par votre banque.<br>
     • Une attestation de non-activité délivrée par les autorités locales pour prouver que vous
     n'exercez pas d'activité professionnelle en tant que retraité.";
     
     $retraiteMsg_ar="
     <br> • (CIN) بطاقة التعريف الوطنية
     • شهادة بالدخل الإجمالي المصدرة من خدمات الضرائب للسنة المالية الحالية.<br>
     • الوثائق الأخيرة التي تثبت حصولك على معاش أو مستحقات تقاعدية صادرة عن الجهات الضامنة الاجتماعية مثل الصندوق الوطني للضمان الاجتماعي (CNSS)، CIMR، أو RCAR.<br>
     • البيانات المصرفية لآخر 6 أشهر المصدقة والمعتمدة من بنكك.<br>
     • شهادة بعدم النشاط المهني صادرة عن السلطات المحلية لإثبات عدم ممارستك لنشاط مهني كمتقاعد.
     ";
 
 
 
 
      $Parent_sans_activite_professionnelleMsg_fr=  "
      • La Carte d’Identité Nationale (CIN) <br>
      • Attestation de revenu global délivrée par l'administration fiscale.<br>
     • Certificat de non-activité délivré par les autorités locales.";
     
      $Parent_sans_activite_professionnelleMsg_ar= "
      <br> • (CIN) بطاقة التعريف الوطنية
     • شهادة بالدخل الإجمالي المصدرة من إدارة الضرائب.<br>
     • شهادة بعدم النشاط المهني صادرة عن السلطات المحلية.<br>
     ";
   
 
                   
                 
       $Parent_dans_la_profession_liberaleMsg_fr=  "
       • La Carte d’Identité Nationale (CIN) <br>
     • Une attestation de revenu global délivrée par l'administration fiscale.<br>
     • Une quittance de patente en cours de validité.<br>
     • Une preuve d'inscription au registre du commerce.<br>
     • Une carte de membre de l'ordre ou une carte professionnelle valide.<br>
     • Votre identifiant fiscal.<br>
     • Votre identifiant commun des entreprises (SIRET).<br>
     • Les six derniers relevés bancaires pour vos comptes personnel et professionnel, tamponnés
     et signés par votre banque";
     
       $Parent_dans_la_profession_liberaleMsg_ar= "
       <br> • (CIN) بطاقة التعريف الوطنية
     <br>   • شهادة بالدخل الإجمالي المصدرة من إدارة الضرائب.
     <br> • وصل دفع ضريبة البطاقة المهنية صالحة.
     <br> • دليل تسجيلك في السجل التجاري.
     <br> • بطاقة عضو في النقابة أو بطاقة مهنية صالحة.
     <br> • هويتك الضريبية.
     <br>  • هويتك المشتركة للشركات (SIRET).
     <br> • البيانات المصرفية لآخر 6 أشهر لحساباتك الشخصية والمهنية، مختومة وموقعة من بنكك.
     ";
     
      $Parent_decede_fr="
        • La Carte d’Identité Nationale (CIN) Etudiant <br>,
        • Certificat de décès <br>,
        • Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne ou ceux de votre mère ou tout soutien de famille en cas de décès de votre père, certifiés et tamponnés par votre banque
    ";
            
    $Parent_decede_ar = 
        "<br> • بطاقة الهوية الوطنية للطالب (CIN) ,
        <br> • شهادة الوفاة,
        <br> • كشف حساب بنكي لآخر 6 أشهر للحسابات الجارية وحسابات التوفير الخاصة بك ، وكذلك حسابات والدتك أو أي معيل في حالة وفاة والدك ، مصدقة ومختومة من البنك الذي تتعامل معه"
    ;
     
 
      $message_bourse;
   

if($request->input('radio-group')=='bourse_oui'){


    
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
    $flag_bourse=false;
    $Check_Inscription = Inscrire::where('CIN_MASSAR', $request->input('cin_massar'))
    ->where('Filiere', $request->input('Sectors'))
    ->first();

    $Check_Inscription_cne_bourse = bourses::where('cne', $request->cin)
    ->first();
    $Check_Inscription_massar_bourse = bourses::where('cin_massar', $request->cin_massar)
    ->first();

    $code_inscription = date('dmY') . substr(str_shuffle(MD5(microtime())), 0, 4);
    $code_inscription_recu_non_bourse = DB::table('inscrires')->pluck('code_inscription')->first();
    $code_inscription_recu = DB::table('inscrires')->pluck('code_inscription')->first();
    $code_inscription_recu_bource = DB::table('bourses')->pluck('code_inscription')->first();

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


        $pdf_inscription = PDF::loadView('recu_inscri_with_bource', ['request' => $request, 'code_inscription_recu' => $code_inscription_recu]);
        $flag_inscription=true;

    }

  

    if(!$Check_Inscription_cne_bourse && !$Check_Inscription_massar_bourse){
        
        $bourses = new bourses;
        $bourses->code_inscription = $code_inscription;
        $bourses->Nom =$request->Nom;
        $bourses->email = $request->email;
        $bourses->cne = $request->cin;
        $bourses->date_naissance = $request->yyyy.'-'.$request->mm.'-'.$request->dd;
        $bourses->telephone = $request->telephone;
        $bourses->nom_pere_complet = $request->nom_pere_complet;
        $bourses->cin_massar =$request->cin_massar;
        $bourses->adresse =$request->adresse;
        $bourses->profession = $request->profession;
        $bourses->Sectors =$request->Sectors; 
        $bourses->type_bourse = $request->type_bourse;
        $bourses->compte_bancaire = $request->compte_bancaire;
        $bourses->nom_mere_complet= $request->ncm;
        $bourses->profession_mere = $request->profession_mere;
        // $bourses->nom_mere_complet = $request->ncm;
        //$bourses->profession_mere = $request->profession_mere;
   
        $bourses->save();
        $pdf_bourse = PDF::loadView('recu_bourse', ['request' => $request, 'code_inscription_recu_bource' => $code_inscription_recu_bource]);
        $flag_bourse=true;
        

    }
  
    if($flag_inscription &&  $flag_bourse ) {





        if(session()->get('locale') =='fr'){
            return response()->json([
                'pdf_inscription' => base64_encode($pdf_inscription->output()),
                'pdf_bourse' => base64_encode($pdf_bourse->output()),
                'message' => 'Vous êtes bien inscrit , ainsi que dans la bourse ',
                'message_bourse'=>$message_bourse
            ], 200);}
    
    
            if(session()->get('locale') =='ar'){
                return response()->json([
                    'pdf_inscription' => base64_encode($pdf_inscription->output()),
                    'pdf_bourse' => base64_encode($pdf_bourse->output()),
                    'message' => 'تم تقديم طلبكم',
                    'message_bourse'=>$message_bourse
                ], 200);}

                


    }



    if($flag_bourse) {


        if(session()->get('locale') =='fr'){
        return response()->json([
            'pdf_bourse' => base64_encode($pdf_bourse->output()),
            'message' => "Vous êtes  déja  inscrit à l'école  mais vous venez s'inscrire à la bourse ",
            'message_bourse'=>$message_bourse
        ], 200);
    }

    if(session()->get('locale') =='ar'){
        return response()->json([
            'pdf_bourse' => base64_encode($pdf_bourse->output()),
            'message' => "أنت مسجل بالفعل في المدرسة ولكنك تم تقديم طلبكم  للتسجيل في المنحة الدراسية  ",
            'message_bourse'=>$message_bourse
        ], 200);


    }

    }
    else{  
        
        if(session()->get('locale') =='fr') {return response()->json([
        
            'message_deja' => "Vous etes déja inscrit"
        ], 200);
            }

            if(session()->get('locale') =='ar') {return response()->json([
        
                'message_deja' => "أنت بالفعل مسجل مسبقا في المدرسة"
            ], 200);
                }
    }





}

else if ($request->input('radio-group')=='bourse_non')
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

   ////////////////////////////////////////////////////////////////////////



        
        ////////////////////////////////////////////////////////////////////////
     



    }
    
    
    public function CheckUserInscrit(Request $request){

        $Check_Inscription2 = Inscrire::where('cni', $request->cin)
        ->where('date_naissance', $request->date_naissance)->where('fichier_notes',null)
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
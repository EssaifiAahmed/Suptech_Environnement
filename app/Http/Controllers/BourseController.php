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
        $Check_Inscription = bourses::where('cne', $request->cin)
        ->where('date_naissance', $request->date_naissance)->where('fichier_complets',null)
            ->first();

        

         $commerçantMsg_fr=[
            "Fiche demande de bourse",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            'Une attestation de revenu global délivrée par les services fiscaux compétents',
            'Les statuts de la société si celle-ci a été constituée',
            'Une inscription valide au registre du commerce en vigueur',
            "Une quittance de la patente pour l'année en cours",
            'Les six derniers relevés bancaires pour les comptes personnels et professionnels liés à
            lentreprise',
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            'une copie des pages du livret de famille qui ont été remplies',
            'une déclaration sur l\'honneur légalisée des parents concernant leurs revenus et leurs biens', 
            ];
       
            $commerçantMsg_ar = [
                "استمارة طلب المنحة",
                "بطاقة الهوية الوطنية للطالب (CIN)" ,
                " بطاقة الهوية الوطنية للأب (CIN)" ,
                'شهادة الدخل الإجمالي المصدرة من الجهات الضريبية المختصة',
                'النظام الأساسي للشركة إذا تم إنشاؤها',
                'تسجيل صالح في سجل التجارة النافذ',
                'إيصال البطاقة المهنية للعام الجاري',
                'آخر ستة كشوفات بنكية للحسابات الشخصية والمهنية المرتبطة بالشركة',
                'رسالة تحفيزية',
                'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
               'نسخة من صفحات سجل العائلة التي تم ملؤها',
               'إقرار بالشرف مصادق عليه من قبل الوالدين بشأن دخلهم وأموالهم',
            ];

        $salarieMsg_fr=[
            "Fiche demande de bourse",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "Un document officiel de l employeur attestant de votre emploi, incluant votre date
            d'embauche, votre poste et votre salaire mensuel net (Attestation de travail)",
            "Les trois derniers bulletins de salaire signés et tamponnés par l'employeur",
            "Une attestation de déclaration des salaires (récapitulatif de carrière) émise par la Caisse
            Nationale de Sécurité Sociale (CNSS)",
            "Une attestation de revenus globaux délivrée par l'administration fiscale",
            "Les six derniers relevés de compte bancaire cachetés par votre banque (incluant votre
            compte courant ainsi que votre compte épargne si vous en possédez un)",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            'une copie des pages du livret de famille qui ont été remplies',
            'une déclaration sur l\'honneur légalisée des parents concernant leurs revenus et leurs biens', 
        ];

                
            $salarieMsg_ar = [
                "استمارة طلب المنحة",
                "بطاقة الهوية الوطنية للطالب (CIN)" ,
                " بطاقة الهوية الوطنية للأب (CIN)" ,
                'وثيقة رسمية من جهة العمل تثبت توظيفك، تتضمن تاريخ التوظيف، وظيفتك، وصافي أجرتك الشهرية (شهادة عمل)',
                'آخر ثلاث كشوفات الراتب الموقعة والمختومة من قبل جهة العمل',
                'شهادة إعلان الأجور (ملخص المسار المهني) الصادرة عن الصندوق الوطني للضمان الاجتماعي (CNSS)',
                'شهادة الدخل الإجمالي المصدرة من الإدارة الضريبية',
                'آخر ستة كشوفات بنكية مختومة من بنكك (تشمل حسابك الجاري وحساب التوفير إذا كان لديك)',
                'رسالة تحفيزية',
                'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
               'نسخة من صفحات سجل العائلة التي تم ملؤها',
               'إقرار بالشرف مصادق عليه من قبل الوالدين بشأن دخلهم وأموالهم',
              ];

        $fonctionnaireMsg_fr=[
            "Fiche demande de bourse",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "Une lettre officielle de votre employeur confirmant votre emploi actuel et la durée de votre
            contrat. (Attestation de travail)",
            "Une attestation de rémunération indiquant le montant de votre salaire mensuel brut et net
            ainsi que les avantages en nature éventuels (Attestation de salaire)",
            "Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne, certifiés et
            tamponnés par votre banque",
           "Les 3 derniers relevés de paie, détaillant vos revenus bruts et nets, les cotisations sociales et
            fiscales, ainsi que les primes ou indemnités éventuelles",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            'une copie des pages du livret de famille qui ont été remplies',
            'une déclaration sur l\'honneur légalisée des parents concernant leurs revenus et leurs biens', 
        ];

            $fonctionnaireMsg_ar = [
                "استمارة طلب المنحة",
                "بطاقة الهوية الوطنية للطالب (CIN)" ,
                " بطاقة الهوية الوطنية للأب (CIN)" ,
                'خطاب رسمي من جهة العمل يؤكد وظيفتك الحالية ومدة عقدك (شهادة عمل)',
                'شهادة الأجر توضح قيمة راتبك الشهري الإجمالي والصافي والمزايا العينية إن وجدت (شهادة راتب)',
                'آخر ستة كشوفات بنكية لحساباتك الجارية والتوفير، مختومة ومصدقة من بنكك',
                'آخر ثلاث كشوفات الدفع تفصيلية لدخلك الإجمالي والصافي والمساهمات الاجتماعية والضريبية والمكافآت أو التعويضات إن وجدت',
                'رسالة تحفيزية',
                'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
               'نسخة من صفحات سجل العائلة التي تم ملؤها',
               'إقرار بالشرف مصادق عليه من قبل الوالدين بشأن دخلهم وأموالهم',
              ];



        $retraiteMsg_fr=[
            "Fiche demande de bourse",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "Une attestation de revenu global émise par les services fiscaux pour l'année fiscale en cours",
            "Des justificatifs récents de pension ou de rente émis par des organismes de sécurité sociale
            tels que la CNSS, la CIMR ou la RCAR",
            "Les six derniers relevés de compte bancaire officiels et validés par votre banque",
            "Une attestation de non-activité délivrée par les autorités locales pour prouver que vous
            n'exercez pas d'activité professionnelle en tant que retraité",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            'une copie des pages du livret de famille qui ont été remplies',
            'une déclaration sur l\'honneur légalisée des parents concernant leurs revenus et leurs biens', 
        ];
                
            $retraiteMsg_ar = [
                "استمارة طلب المنحة",
                "بطاقة الهوية الوطنية للطالب (CIN)" ,
                " بطاقة الهوية الوطنية للأب (CIN)" ,
                'شهادة الدخل الإجمالي المصدرة من الجهات الضريبية للسنة المالية الجارية',
                'وثائق حديثة تثبت إنتاج معاش أو إيجارة صادرة عن جهات الضمان الاجتماعي مثل CNSS، CIMR، أو RCAR',
                'آخر ستة كشوفات بنكية رسمية ومصدقة من بنكك',
                'شهادة عدم النشاط المهني صادرة عن السلطات المحلية لإثبات عدم ممارسة نشاط مهني كمتقاعد',
                'رسالة تحفيزية',
                'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
               'نسخة من صفحات سجل العائلة التي تم ملؤها',
               'إقرار بالشرف مصادق عليه من قبل الوالدين بشأن دخلهم وأموالهم',
              ];




        $Parent_sans_activite_professionnelleMsg_fr=[
            "Fiche demande de bourse",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "Attestation de revenu global délivrée par l'administration fiscale",
            "Certificat de non-activité délivré par les autorités locales",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            'une copie des pages du livret de famille qui ont été remplies',
            'une déclaration sur l\'honneur légalisée des parents concernant leurs revenus et leurs biens', 
        ];
                
            $Parent_sans_activite_professionnelleMsg_ar = [
                "استمارة طلب المنحة",
                "بطاقة الهوية الوطنية للطالب (CIN)" ,
                " بطاقة الهوية الوطنية للأب (CIN)" ,
                'شهادة الدخل الإجمالي المصدرة من الإدارة الضريبية',
                'شهادة عدم النشاط المهني صادرة عن السلطات المحلية',
                'رسالة تحفيزية',
                'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
               'نسخة من صفحات سجل العائلة التي تم ملؤها',
               'إقرار بالشرف مصادق عليه من قبل الوالدين بشأن دخلهم وأموالهم',
              ];


                            
        $Parent_dans_la_profession_liberaleMsg_fr= [
            "Fiche demande de bourse",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "Une attestation de revenu global délivrée par l'administration fiscale",
            "Une quittance de patente en cours de validité",
            "Une preuve d'inscription au registre du commerce",
            "Une carte de membre de l'ordre ou une carte professionnelle valide",
            "Votre identifiant fiscal",
            "Votre identifiant commun des entreprises (SIRET)",
            "Les six derniers relevés bancaires pour vos comptes personnel et professionnel, tamponnés
            et signés par votre banque",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            'une copie des pages du livret de famille qui ont été remplies',
            'une déclaration sur l\'honneur légalisée des parents concernant leurs revenus et leurs biens', 
        ];
             
        
        $Parent_dans_la_profession_liberaleMsg_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            " بطاقة الهوية الوطنية للأب (CIN)" ,
            'شهادة الدخل الإجمالي المصدرة من الإدارة الضريبية',
            'إيصال البطاقة المهنية الصالحة للعام الجاري',
            'إثبات الاشتراك في السجل التجاري',
            'بطاقة عضو في النقابة أو بطاقة مهنية صالحة',
            'رقم التعريف الضريبي الخاص بك',
            'معرف المؤسسات المشترك (SIRET)',
            'آخر ستة كشوفات بنكية لحساباتك الشخصية والمهنية مختومة وموقعة من بنكك',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
           'نسخة من صفحات سجل العائلة التي تم ملؤها',
           'إقرار بالشرف مصادق عليه من قبل الوالدين بشأن دخلهم وأموالهم',
          ];
          
          $Parent_decede_fr=[
              "Fiche demande de bourse",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            "certificat de décès",
            "Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne ou ceux de votre mère ou tout soutien de famille en cas de décès de votre père, certifiés et tamponnés par votre banque",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
            'une copie des pages du livret de famille qui ont été remplies',
            'une déclaration sur l\'honneur légalisée des parents concernant leurs revenus et leurs biens', 
        ];
                
        $Parent_decede_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)" ,
            "شهادة الوفاة",
            "كشف حساب بنكي لآخر 6 أشهر للحسابات الجارية وحسابات التوفير الخاصة بك ، وكذلك حسابات والدتك أو أي معيل في حالة وفاة والدك ، مصدقة ومختومة من البنك الذي تتعامل معه",
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
           'نسخة من صفحات سجل العائلة التي تم ملؤها',
           'إقرار بالشرف مصادق عليه من قبل الوالدين بشأن دخلهم وأموالهم',
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

        $pdf = PDF::loadView('admin/recu_bourse', compact('request'));

        return $pdf->download($request->Nom.'_Bourse.pdf');
    }

}

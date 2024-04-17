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

        $Check_Inscription_cne = bourses::where('cne', $request->cin)
            ->first();
        $Check_Inscription_massar = bourses::where('cin_massar', $request->cin_massar)
            ->first();
        $code_inscription = DB::table('inscrires')->pluck('code_inscription')->last();

        if (!$Check_Inscription_cne && !$Check_Inscription_massar) {

            $bourses = new bourses;

            $bourses->code_inscription = $code_inscription;
            $bourses->Nom = $request->Nom;
            $bourses->nom_mere_complet = $request->ncm;
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

            $code_inscription_recu = DB::table('bourses')->pluck('code_inscription')->last();
            $pdf = PDF::loadView('recu_bourse', ['request' => $request, 'code_inscription_recu' => $code_inscription_recu]);

            switch ($request->profession) {
                case 'Parent commerçant':

                    if (session()->get('locale') == 'fr') {
                        return response()->json([
                            'message' => "
                        • La Carte d’Identité Nationale (CIN) <br>
                        • Une attestation de revenu global délivrée par les services fiscaux compétents.<br>
                        • Les statuts de la société si celle-ci a été constituée.<br>
                        • Une inscription valide au registre du commerce en vigueur.<br>
                        • Une quittance de la patente pour l'année en cours.<br>
                        • Les six derniers relevés bancaires pour les comptes personnels et professionnels liés à
                        l'entreprise<br>

                       "
                            , 'pdf' => base64_encode($pdf->output())
                            , 'flag' => 'true',
                        ], 200);
                    } else if (session()->get('locale') == 'ar') {
                        return response()->json([
                            'message' => "
                        <br> • (CIN) بطاقة التعريف الوطنية
                        <br> • شهادة الدخل الإجمالي المصدرة من الجهات الضريبية المختصة.
                        <br>• النظام الأساسي للشركة في حال تأسست الشركة.
                        <br>• تسجيل صالح في سجل التجارة النافذ.
                        <br>• إيصال البطاقة المهنية للعام الجاري.
                        <br>• آخر ستة كشوفات بنكية للحسابات الشخصية والمهنية المرتبطة بالشركة.ة",
                            'pdf' => base64_encode($pdf->output())
                            , 'flag' => 'true',
                        ], 200);

                    } else {
                        return response()->json([
                            'message' => "
                        • La Carte d’Identité Nationale (CIN) <br>
                        • Une attestation de revenu global délivrée par les services fiscaux compétents.<br>
                        • Les statuts de la société si celle-ci a été constituée.<br>
                        • Une inscription valide au registre du commerce en vigueur.<br>
                        • Une quittance de la patente pour l'année en cours.<br>
                        • Les six derniers relevés bancaires pour les comptes personnels et professionnels liés à
                        l'entreprise<br>",
                            'pdf' => base64_encode($pdf->output())
                            , 'flag' => 'true',
                        ], 200);
                    }

                    break;
                case 'Parent salarié': //////////////////////////////////////////////////////////

                    if (session()->get('locale') == 'fr') {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Un document officiel de l'employeur attestant de votre emploi, incluant votre date
                            d'embauche, votre poste et votre salaire mensuel net (Attestation de travail).<br>
                            • Les trois derniers bulletins de salaire signés et tamponnés par l'employeur.<br>
                            • Une attestation de déclaration des salaires (récapitulatif de carrière) émise par la Caisse
                            Nationale de Sécurité Sociale (CNSS).<br>
                            • Une attestation de revenus globaux délivrée par l'administration fiscale.<br>
                            • Les six derniers relevés de compte bancaire cachetés par votre banque (incluant votre
                            compte courant ainsi que votre compte épargne si vous en possédez un).<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else if (session()->get('locale') == 'ar') {
                        return response()->json([
                            'message' => "
                            <br> • (CIN) بطاقة التعريف الوطنية
                            <br> • شهادة بالدخل الإجمالي المصدرة من الجهات الضريبية المختصة.<br>
                            <br>• نظام الشركة إذا تم تأسيسها.<br>
                            <br>• تسجيل صالح في السجل التجاري الحالي.<br>
                            <br> • وصل دفع ضريبة البطاقة المهنية للعام الحالي.<br>
                            <br> • البيانات المصرفية لآخر 6 أشهر للحسابات الشخصية والمهنية المرتبطة بالشركة.<br>
                            لتتبع طلبكم , المرجو زيارة :
                            "
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => "
                            <br>  • وثيقة رسمية من جهة العمل تثبت وظيفتك، بما في ذلك تاريخ التوظيف والمنصب والراتب الصافي الشهري (شهادة العمل).<br>
                            <br> • آخر ثلاث كشوفات الرواتب الموقعة والمختومة من قبل جهة العمل.<br>
                            <br>• شهادة بتقرير الرواتب (ملخص الحياة المهنية) الصادرة عن الصندوق الوطني للضمان الاجتماعي (الصندوق الوطني للضمان الاجتماعي).<br>
                            <br> • شهادة بالدخل الإجمالي المصدرة من إدارة الضرائب.<br>
                            <br> • آخر ست كشوفات حساب مصرفي مختومة من بنكك (بما في ذلك حساب الجاري وحساب التوفير إذا كان لديك).<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    }

                    break;
                case 'Parent fonctionnaire': //////////////////////////////////////////////////////////

                    if (session()->get('locale') == 'fr') {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Une lettre officielle de votre employeur confirmant votre emploi actuel et la durée de votre
                            contrat. (Attestation de travail).<br>
                            • Une attestation de rémunération indiquant le montant de votre salaire mensuel brut et net
                            ainsi que les avantages en nature éventuels (Attestation de salaire).<br>
                            • Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne, certifiés et
                            tamponnés par votre banque.<br>
                            • Les 3 derniers relevés de paie, détaillant vos revenus bruts et nets, les cotisations sociales et
                            fiscales, ainsi que les primes ou indemnités éventuelles.<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else if (session()->get('locale') == 'ar') {
                        return response()->json([
                            'message' => "
                            <br> • (CIN) بطاقة التعريف الوطنية
                            <br> • رسالة رسمية من جهة العمل تؤكد على وظيفتك الحالية ومدة عقدك (شهادة العمل).<br>
                            <br> • شهادة الأجر توضح مبلغ أجرك الإجمالي والصافي الشهري والإضافات العينية إن وجدت (شهادة الأجر).<br>
                            <br> • البيانات المصرفية لآخر 6 أشهر لحساباتك الجارية وحسابات التوفير، مصدقة ومختومة من قبل بنكك.<br>
                            <br> • آخر 3 كشوفات الرواتب، توضح إجمالي الدخل والصافي والمساهمات الاجتماعية والضريبية، وأي مكافآت أو بدلات إضافية إن وجدت.<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Une lettre officielle de votre employeur confirmant votre emploi actuel et la durée de votre
                            contrat. (Attestation de travail).<br>
                            • Une attestation de rémunération indiquant le montant de votre salaire mensuel brut et net
                            ainsi que les avantages en nature éventuels (Attestation de salaire).<br>
                            • Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne, certifiés et
                            tamponnés par votre banque.<br>
                            • Les 3 derniers relevés de paie, détaillant vos revenus bruts et nets, les cotisations sociales et
                            fiscales, ainsi que les primes ou indemnités éventuelles.<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    }

                    break;
                case 'Parent retraité': //////////////////////////////////////////////////////////

                    if (session()->get('locale') == 'fr') {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Une attestation de revenu global émise par les services fiscaux pour l'année fiscale en cours.<br>
                            • Des justificatifs récents de pension ou de rente émis par des organismes de sécurité sociale
                            tels que la CNSS, la CIMR ou la RCAR.<br>
                            • Les six derniers relevés de compte bancaire officiels et validés par votre banque.<br>
                            • Une attestation de non-activité délivrée par les autorités locales pour prouver que vous
                            n'exercez pas d'activité professionnelle en tant que retraité.<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else if (session()->get('locale') == 'ar') {
                        return response()->json([
                            'message' => "
                            <br> • (CIN) بطاقة التعريف الوطنية
                            • شهادة بالدخل الإجمالي المصدرة من خدمات الضرائب للسنة المالية الحالية.<br>
                            • الوثائق الأخيرة التي تثبت حصولك على معاش أو مستحقات تقاعدية صادرة عن الجهات الضامنة الاجتماعية مثل الصندوق الوطني للضمان الاجتماعي (CNSS)، CIMR، أو RCAR.<br>
                            • البيانات المصرفية لآخر 6 أشهر المصدقة والمعتمدة من بنكك.<br>
                            • شهادة بعدم النشاط المهني صادرة عن السلطات المحلية لإثبات عدم ممارستك لنشاط مهني كمتقاعد.<br>"
                            , 'flag' => 'true',
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Une attestation de revenu global émise par les services fiscaux pour l'année fiscale en cours.<br>
                            • Des justificatifs récents de pension ou de rente émis par des organismes de sécurité sociale
                            tels que la CNSS, la CIMR ou la RCAR.<br>
                            • Les six derniers relevés de compte bancaire officiels et validés par votre banque.<br>
                            • Une attestation de non-activité délivrée par les autorités locales pour prouver que vous
                            n'exercez pas d'activité professionnelle en tant que retraité.<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    }

                    break;
                case 'Parent sans activité professionnelle': //////////////////////////////////////////////////////////
                    error_log("Parent sans activité professionnelle");
                    if (session()->get('locale') == 'fr') {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Attestation de revenu global délivrée par l'administration fiscale.<br>
                            • Certificat de non-activité délivré par les autorités locales.
                            <br>"
                            , 'flag' => 'true',
                        ], 200);
                    } else if (session()->get('locale') == 'ar') {
                        return response()->json([
                            'message' => "
                            <br> • (CIN) بطاقة التعريف الوطنية
                            • شهادة بالدخل الإجمالي المصدرة من إدارة الضرائب.<br>
                            • شهادة بعدم النشاط المهني صادرة عن السلطات المحلية.<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Attestation de revenu global délivrée par l'administration fiscale.<br>
                            • Certificat de non-activité délivré par les autorités locales.
                            <br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    }

                    break;

                case 'Parent dans la profession libérale': //////////////////////////////////////////////////////////

                    if (session()->get('locale') == 'fr') {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Une attestation de revenu global délivrée par l'administration fiscale.<br>
                            • Une quittance de patente en cours de validité.<br>
                            • Une preuve d'inscription au registre du commerce.<br>
                            • Une carte de membre de l'ordre ou une carte professionnelle valide.<br>
                            • Votre identifiant fiscal.<br>
                            • Votre identifiant commun des entreprises (SIRET).<br>
                            • Les six derniers relevés bancaires pour vos comptes personnel et professionnel, tamponnés
                            et signés par votre banque
                            <br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else if (session()->get('locale') == 'ar') {
                        return response()->json([
                            'message' => "
                            <br> • (CIN) بطاقة التعريف الوطنية
                            <br>   • شهادة بالدخل الإجمالي المصدرة من إدارة الضرائب.
                            <br> • وصل دفع ضريبة البطاقة المهنية صالحة.
                            <br> • دليل تسجيلك في السجل التجاري.
                            <br> • بطاقة عضو في النقابة أو بطاقة مهنية صالحة.
                            <br> • هويتك الضريبية.
                            <br>  • هويتك المشتركة للشركات (SIRET).
                            <br> • البيانات المصرفية لآخر 6 أشهر لحساباتك الشخصية والمهنية، مختومة وموقعة من بنكك."
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => "
                            • La Carte d’Identité Nationale (CIN) <br>
                            • Une attestation de revenu global délivrée par l'administration fiscale.<br>
                            • Une quittance de patente en cours de validité.<br>
                            • Une preuve d'inscription au registre du commerce.<br>
                            • Une carte de membre de l'ordre ou une carte professionnelle valide.<br>
                            • Votre identifiant fiscal.<br>
                            • Votre identifiant commun des entreprises (SIRET).<br>
                            • Les six derniers relevés bancaires pour vos comptes personnel et professionnel, tamponnés
                            et signés par votre banque
                            <br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    }

                case 'Parent décédé':

                    if (session()->get('locale') == 'fr') {
                        return response()->json([
                            'message' => "
                            • Certificat de décès<br>
                            • Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne ou ceux de votre mère ou tout soutien de famille en cas de décès de votre père, certifiés et tamponnés par votre banque<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else if (session()->get('locale') == 'ar') {
                        return response()->json([
                            'message' => "
                            <br> • (CIN) بطاقة الهوية الوطنية للطالب
                            <br>   • شهادة الوفاة
                            <br> • كشف حساب بنكي لآخر 6 أشهر للحسابات الجارية وحسابات التوفير الخاصة بك ، وكذلك حسابات والدتك أو أي معيل في حالة وفاة والدك ، مصدقة ومختومة من البنك الذي تتعامل معه"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => "
                            • Certificat de décès<br>
                            • Les relevés bancaires des 6 derniers mois pour vos comptes courants et épargne ou ceux de votre mère ou tout soutien de famille en cas de décès de votre père, certifiés et tamponnés par votre banque<br>"
                            , 'flag' => 'true'
                            , 'pdf' => base64_encode($pdf->output()),
                        ], 200);
                    }

                    break;

                    break;
                default:
                    break;
            }

        } else {
            if (session()->get('locale') == 'fr') {
                return response()->json([
                    'message' => 'Vous êtes déjà inscrit à La bourse',
                    'flag' => 'already',
                ], 200);
            } else if (session()->get('locale') == 'ar') {
                return response()->json([
                    'message' => 'أنت مسجل بالفعل في المنحة',
                    'flag' => 'already',
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Vous êtes déjà inscrit à la bourse',
                    'flag' => 'already',
                ], 200);
            }
        }

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

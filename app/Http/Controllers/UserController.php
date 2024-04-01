<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Models\Inscrire;


class UserController extends Controller
{


//// hdi li khdama db 
    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        
        //dd(Hash::make($request->password));
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            $usersCount = DB::select('SELECT COUNT(*) as count FROM inscrires')[0]->count;
            $BourseCount = DB::select('SELECT COUNT(*) as count FROM bourses')[0]->count;
            $mssgCount = DB::select('SELECT COUNT(*) as count FROM contacts')[0]->count; 
            
            //Social Media
            $AbjudaResultat = Inscrire::where('tsrc', 'abujad')->get();
            $instaResultat = Inscrire::where('tsrc', 'instagram')->get();
            $FaceResultat = Inscrire::where('tsrc', 'facebook')->get();
            $LinkdinResultat = Inscrire::where('tsrc', 'linkedin')->get();
            
            //Classes préparatoires
            $Prepa1 = Inscrire::where('Filiere', "Classes préparatoires intégrées: 1ère année")->get();
            $Prepa2 = Inscrire::where('Filiere', 'Classes préparatoires intégrées: 2ème année')->get();
            
            //Cycle ingénieur
            $CycleIng1 = Inscrire::where('Filiere', "Cycle ingénieur: Génie de l'Eau et de l'Environnement")->get();
            $CycleIng2 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie Digitale Energétique et Energies Renouvelables')->get();
            $CycleIng3 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie Digitale des Système Energétiques')->get();
            
            //old Formation continue 
            // $FormationCont1 = Inscrire::where('Filiere', 'Formation continue: Maintenance et génie biomédical')->get();
            // $FormationCont2 = Inscrire::where('Filiere', 'Formation continue: Génie industriel et logistique')->get();
            // $FormationCont3 = Inscrire::where('Filiere', 'Formation continue: Entrepreneuriat')->get();
            
            //Licence
            $LGASTE = Inscrire::where('Filiere', "Licence en Génie de l'Assainissement et des Systèmes de Traitement des Eaux")->get();
            $LQHSE = Inscrire::where('Filiere', "Licence en Qualité, Hygiène, Sécurité et Environnement")->get();
            $LSER = Inscrire::where('Filiere', "Licence en smart Energies Renouvelables")->get();
            $LGDILVH = Inscrire::where('Filiere', "Licence en Gestion digitale Intégrée Du Littoral Et Valorisation Halieutique")->get();
            $MSPSM_O1PI = Inscrire::where('Filiere', "Licence en Métiers Subaquatiques et Plongée Sous-Marine -> Option 1 : Plongeur inspecteur")->get();
            $MSPSM_O2TPO = Inscrire::where('Filiere', "Licence en Métiers Subaquatiques et Plongée Sous-Marine -> Option 2 : Travaux public, ouvrages")->get();
            // $LTech = Inscrire::where('Filiere', 'Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            // $LIAR = Inscrire::where('Filiere', 'Licence Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            // $L2IBO = Inscrire::where('Filiere', 'Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            
            //Master
            $Master1 = Inscrire::where('Filiere', "Master en Génie de l'Eau, de l'Assainissement et des Aménagements Hydroagricoles")->get();
            // $Master2 = Inscrire::where('Filiere', 'Master en dispositifs médicaux et affaires réglementaires')->get();
            // $Master3 = Inscrire::where('Filiere', 'Master en entreprenariat et Management Technologique')->get();

            //New Formation continue :

            // $FC_LIDe = Inscrire::where('Filiere', 'Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            // $FC_L2M = Inscrire::where('Filiere', 'Formation continue Bac+3: Maintenance Médicale (L2M)')->get();
            // $FC_LSG = Inscrire::where('Filiere', 'Formation continue Bac+3: Sciences de Gestion (LSG)')->get();
            // $FC_LGILH = Inscrire::where('Filiere', 'Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            // $FC_LIP = Inscrire::where('Filiere', 'Formation continue Bac+3: Infirmier Polyvalent (LIP)')->get();
            // $FC_LTech = Inscrire::where('Filiere', 'Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            // $FC_LIAR = Inscrire::where('Filiere', 'Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            // $FC_L2IBO = Inscrire::where('Filiere', 'Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();

            // $FC_Master1 = Inscrire::where('Filiere', 'Formation continue Bac+5: Maintenance et Génie biomédical')->get();
            // $FC_Master2 = Inscrire::where('Filiere', 'Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires')->get();
            // $FC_Master3 = Inscrire::where('Filiere', 'Formation continue Bac+5: Entreprenariat et Management Technologique')->get();

            
            
            $rows = Inscrire::all();
            $groups = $rows->groupBy(function ($item) {
                return explode(':', $item->Filiere)[0];
            });

        
           // return view('/admin/Panel', ['usersCount' => $usersCount , 'mssgCount' => $mssgCount]);
            return redirect('/fr/panel');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

 
 

    public function CheckUserpanel()
    {
        
        if(Auth::check()){
            $user = DB::table('inscrires')->orderBy('id', 'ASC')->get();
            $usersCount = DB::select('SELECT COUNT(*) as count FROM inscrires')[0]->count;
            $BourseCount = DB::select('SELECT COUNT(*) as count FROM bourses')[0]->count;
            $mssgCount = DB::select('SELECT COUNT(*) as count FROM contacts')[0]->count; 
            
            //Social Media
            $AbjudaResultat = Inscrire::where('tsrc', 'abujad')->get();
            $instaResultat = Inscrire::where('tsrc', 'instagram')->get();
            $FaceResultat = Inscrire::where('tsrc', 'facebook')->get();
            $LinkdinResultat = Inscrire::where('tsrc', 'linkedin')->get();
            
            //Classes préparatoires
            $Prepa1 = Inscrire::where('Filiere', "Classes préparatoires intégrées: 1ère année")->get();
            $Prepa2 = Inscrire::where('Filiere', 'Classes préparatoires intégrées: 2ème année')->get();
            
            //Cycle ingénieur
            $CycleIng1 = Inscrire::where('Filiere', "Cycle ingénieur: Génie de l'Eau et de l'Environnement")->get();
            $CycleIng2 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie Digitale Energétique et Energies Renouvelables')->get();
            $CycleIng3 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie Digitale des Système Energétiques')->get();
            
            //old Formation continue 
            // $FormationCont1 = Inscrire::where('Filiere', 'Formation continue: Maintenance et génie biomédical')->get();
            // $FormationCont2 = Inscrire::where('Filiere', 'Formation continue: Génie industriel et logistique')->get();
            // $FormationCont3 = Inscrire::where('Filiere', 'Formation continue: Entrepreneuriat')->get();
            
            //Licence
            $LGASTE = Inscrire::where('Filiere', "Licence en Génie de l'Assainissement et des Systèmes de Traitement des Eaux")->get();
            $LQHSE = Inscrire::where('Filiere', "Licence en Qualité, Hygiène, Sécurité et Environnement")->get();
            $LSER = Inscrire::where('Filiere', "Licence en smart Energies Renouvelables")->get();
            $LGDILVH = Inscrire::where('Filiere', "Licence en Gestion digitale Intégrée Du Littoral Et Valorisation Halieutique")->get();
            $MSPSM_O1PI = Inscrire::where('Filiere', "Licence en Métiers Subaquatiques et Plongée Sous-Marine -> Option 1 : Plongeur inspecteur")->get();
            $MSPSM_O2TPO = Inscrire::where('Filiere', "Licence en Métiers Subaquatiques et Plongée Sous-Marine -> Option 2 : Travaux public, ouvrages")->get();
            // $LTech = Inscrire::where('Filiere', 'Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            // $LIAR = Inscrire::where('Filiere', 'Licence Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            // $L2IBO = Inscrire::where('Filiere', 'Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            
            //Master
            $Master1 = Inscrire::where('Filiere', "Master en Génie de l'Eau, de l'Assainissement et des Aménagements Hydroagricoles")->get();
            // $Master2 = Inscrire::where('Filiere', 'Master en dispositifs médicaux et affaires réglementaires')->get();
            // $Master3 = Inscrire::where('Filiere', 'Master en entreprenariat et Management Technologique')->get();

            //New Formation continue :

            // $FC_LIDe = Inscrire::where('Filiere', 'Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            // $FC_L2M = Inscrire::where('Filiere', 'Formation continue Bac+3: Maintenance Médicale (L2M)')->get();
            // $FC_LSG = Inscrire::where('Filiere', 'Formation continue Bac+3: Sciences de Gestion (LSG)')->get();
            // $FC_LGILH = Inscrire::where('Filiere', 'Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            // $FC_LIP = Inscrire::where('Filiere', 'Formation continue Bac+3: Infirmier Polyvalent (LIP)')->get();
            // $FC_LTech = Inscrire::where('Filiere', 'Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            // $FC_LIAR = Inscrire::where('Filiere', 'Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            // $FC_L2IBO = Inscrire::where('Filiere', 'Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();

            // $FC_Master1 = Inscrire::where('Filiere', 'Formation continue Bac+5: Maintenance et Génie biomédical')->get();
            // $FC_Master2 = Inscrire::where('Filiere', 'Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires')->get();
            // $FC_Master3 = Inscrire::where('Filiere', 'Formation continue Bac+5: Entreprenariat et Management Technologique')->get();

            
        
           // return view('/admin/Panel', ['usersCount' => $usersCount , 'mssgCount' => $mssgCount]);
            return view('/admin/Panel', [
                'usersCount' => $usersCount ,
                'BourseCount' => $BourseCount, 
                'mssgCount' => $mssgCount, 
                'Prepa1' => $Prepa1, 
                'Prepa2' => $Prepa2, 
                'CycleIng1' => $CycleIng1, 
                'CycleIng2' => $CycleIng2, 
                'CycleIng3' => $CycleIng3, 
                'LGASTE' => $LGASTE,
                'LQHSE' => $LQHSE, 
                'LSER' => $LSER, 
                'LGDILVH' => $LGDILVH, 
                'MSPSM_O1PI' => $MSPSM_O1PI, 
                'MSPSM_O2TPO' => $MSPSM_O2TPO,  
                'Master1' => $Master1, 
                'AbjudaResultat' => $AbjudaResultat, 
                'instaResultat' => $instaResultat, 
                'FaceResultat' => $FaceResultat, 
                'LinkdinResultat' => $LinkdinResultat, 
            ])->with('panelactive','home');
   
        }
  
        return view('/admin/Login');
    }



    public function logout()
    {
        Auth::logout();

        return redirect('fr/adminpanel');
      
    }



}



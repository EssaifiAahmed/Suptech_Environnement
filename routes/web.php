<?php

use App\Http\Controllers\BourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExportExcel;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InscriptionCompleteController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\uploadfiles;
use App\Http\Controllers\uploadfiles_Inscr;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbujadController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/{slug}/ajoutimage', function ($slug) {
    if (Auth::check()) {

        if ($slug == 'fr') {
            App::setLocale($slug);
            session()->put('locale', $slug);
        } else if ($slug == 'ar') {
            App::setLocale($slug);
            session()->put('locale', $slug);
        } else {
            return redirect('/fr');
        }
    } else {
        return view('admin/Login');
    }

    $images = DB::select("SELECT id,name,created_at FROM images ORDER BY id DESC ;");
    return view('admin/ajoutimage', compact('images'))->with('panelactive', 'ajoutimage');

})->name('ajoutimage');

Route::get('{slug}/images', [ImageController::class, 'getImages'])->name('images');

Route::post('/image/store', [ImageController::class, 'store'])->name('image.store');

Route::get('/', function () {

    if (App::isLocale('fr')) {
        session()->put('locale', 'fr');
        return redirect('/fr');
    } else if (App::isLocale('ar')) {
        session()->put('locale', 'ar');
        return redirect('/ar');
    } else {
        session()->put('locale', 'fr');
        return redirect('/fr');
    }

    /*   return view('index');  */
});

Route::get('/{slug}', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('index');
});

Route::get('/{slug}/cnc', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('Concours');
})->name('cnc');

/*  Route::get('/galerie', function () {
return view('galerie');
});  */

Route::get('/{slug}/galerie', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }
    $images = DB::select("SELECT name FROM images ORDER BY id DESC LIMIT 0, 6");
    return view('galerie', compact('images'));
})->name('galerie');

/* Route::get('/inscription', function () {
return view('inscription');
})->name('inscription'); */

Route::get('/{slug}/inscription', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('inscriptionWithBourse');
})->name('inscription');

// Bourse Suivi

Route::get('/{slug}/Suivi', function ($slug) {

    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('suiviBourse');
})->name('Suivi');

Route::get('/{slug}/filesbourse', function ($slug) {

    if (session()->get('bourse_auth')) {
        if ($slug == 'fr') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else if ($slug == 'ar') {
            App::setLocale($slug);
            session()->put('locale', $slug);
        } else {
            return redirect('/fr');
        }

        return view('FilesBourse');
    } else {
        if ($slug == 'fr') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else if ($slug == 'ar') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else {
            return redirect('/fr');
        }

        return view('suiviBourse');
    }

})->name('filesbourse');

Route::match(array('GET', 'POST'), '{slug}/CheckUserBourse', [BourseController::class, 'CheckUserBourse'])->name('CheckUserBourse');

Route::match(array('GET', 'POST'), '{slug}/ajoutfichier2{id}', [uploadfiles::class, 'storefile'])->name('uploadfiles.storefile');

Route::post('/inscription', [InscriptionCompleteController::class, 'Insert'])->name('InsertTest');
Route::match(array('GET', 'POST'), '{slug}/check_signup', [InscriptionCompleteController::class, 'checkInscription'])->name('check_signup');
Route::match(array('GET', 'POST'), '{slug}/index_check_signup', [InscriptionCompleteController::class, 'indexCheckInscription'])->name('index_check_signup');
Route::view('documents_inscription', 'documents')->name('documents_inscription');

/* Route::get('/contact', function () {
return view('/contact');
}); */

Route::get('/{slug}/contact', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('contact');
})->name('contact');

Route::get('/{slug}/documents_inscription', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('documents');
})->name('documents_inscription');

/* Route::get('/contacta', function () {
return view('admin/contact');
}); */

Route::get('/{slug}/contacta', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('admin/contact');
})->name('contacta');

/* Route::get('/adminpanel', function () {
return view('admin/Login');
}); */

Route::get('/{slug}/adminpanel', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('admin/Login');
})->name('adminpanel');

Route::get('/{slug}/abujadpanel', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('abujad/Login_abujad');
})->name('abujadpanel');

/*  Route::get('/prepa1', function () {
return view('filieres/prepa1');
}); */

Route::get('/{slug}/prepa1', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/prepa1');
})->name('prepa1');

/* Route::get('/prepa2', function () {
return view('filieres/prepa2');
}); */

Route::get('/{slug}/prepa2', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/prepa2');
})->name('prepa2');

/** Mes routes */

/* Route::get('/tee', function () {
return view('filieres/tee');
}); */

Route::get('/{slug}/tee', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/tee');
})->name('tee');

/* Route::get('/ter', function () {
return view('filieres/ter');
}); */

Route::get('/{slug}/ter', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/ter');
})->name('ter');

/* Route::get('/gaste', function () {
return view('filieres/gaste');
}); */

Route::get('/{slug}/gaste', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/gaste');
})->name('gaste');

/* Route::get('/gee', function () {
return view('filieres/gee');
}); */

Route::get('/{slug}/gee', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/gee');
})->name('gee');

/* Route::get('/geer', function () {
return view('filieres/geer');
}); */

Route::get('/{slug}/geer', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/geer');
})->name('geer');

/* Route::get('/geaah', function () {
return view('filieres/geaah');
}); */

Route::get('/{slug}/geaah', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/geaah');
})->name('geaah');

/* Route::get('/mee', function () {
return view('filieres/mee');
}); */

Route::get('/{slug}/mee', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/mee');
})->name('mee');

/** Fin mes routes */

/* Route::get('/lpm', function () {
return view('filieres/lpm');
}); */

Route::get('/{slug}/lpm', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/lpm');
})->name('lpm');

/* Route::get('/lpg', function () {
return view('filieres/lpg');
}); */

Route::get('/{slug}/lpg', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/lpg');
})->name('lpg');

/* Route::get('/lpi', function () {
return view('filieres/lpi');
}); */

Route::get('/{slug}/lpi', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/lpi');
})->name('lpi');

/* Route::get('/lps', function () {
return view('filieres/lps');
}); */

Route::get('/{slug}/lps', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/lps');
})->name('lps');

/* Route::get('/genieb', function () {
return view('filieres/GenieB');
}); */

Route::get('/{slug}/genieb', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/GenieB');
})->name('genieb');

/* Route::get('/geniec', function () {
return view('filieres/GenieC');
}); */

Route::get('/{slug}/geniec', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/GenieC');
})->name('geniec');

/* Route::get('/genied', function () {
return view('filieres/GenieD');
}); */

Route::get('/{slug}/genied', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/GenieD');
})->name('genied');

/* Route::get('/masterd', function () {
return view('filieres/MasterD');
}); */

Route::get('/{slug}/masterd', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/MasterD');
})->name('masterd');

/* Route::get('/mastermaint', function () {
return view('filieres/MasterMaint');
}); */

Route::get('/{slug}/mastermaint', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/MasterMaint');
})->name('mastermaint');

/* Route::get('/mastere', function () {
return view('filieres/MasterE');
}); */

Route::get('/{slug}/mastere', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/MasterE');
})->name('mastere');

/* Route::get('/fcm', function () {
return view('filieres/fcm');
}); */

Route::get('/{slug}/fcm', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/fcm');
})->name('fcm');

/* Route::get('/fcg', function () {
return view('filieres/fcg');
}); */

Route::get('/{slug}/fcg', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/fcg');
})->name('fcg');

/* Route::get('/fce', function () {
return view('filieres/fce');
}); */

Route::get('/{slug}/fce', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/fce');
})->name('fce');

/* Route::get('/cp', function () {
return view('filieres/CP');
}); */

Route::get('/{slug}/cp', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/CP');
})->name('cp');

/* Route::get('/ci', function () {
return view('filieres/CI');
}); */

Route::get('/{slug}/ci', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/CI');
})->name('ci');

/* Route::get('/cl', function () {
return view( 'filieres/CL');
}); */

Route::get('/{slug}/cl', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/CL');
})->name('cl');

/* Route::get('/cm', function () {
return view('filieres/CM');
}); */

Route::get('/{slug}/cm', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/CM');
})->name('cm');

/* Route::get('/fc', function () {
return view('filieres/FC');
}); */

Route::get('/{slug}/fc', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('filieres/FC');
})->name('fc');

Route::get('/{slug}/ltlbm', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }
    return view('filieres/ltlbm');
})->name('ltlbm');

Route::get('/{slug}/lip', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }
    return view('filieres/lip');
})->name('lip');

Route::get('/{slug}/liar', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }
    return view('filieres/liar');
})->name('liar');

Route::get('/{slug}/liibo', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }
    return view('filieres/liibo');
})->name('liibo');

Route::get('/{slug}/bourse_inscription', function ($slug) {

    error_log($slug);
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {

        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }
    return view('bourse_inscription');

})->name('bourse_inscription');

Route::get('/{slug}/index_check_signup', function ($slug) {

    error_log($slug);
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {

        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }
    return view('check_bourse');

})->name('check_bourse');

Route::match(array('GET', 'POST'), '{slug}/InsertBourse', [InscriptionController::class, 'bourseInscription'])->name('InsertBourse');

//Inscrire route
Route::match(array('GET', 'POST'), '{slug}/Insert', [InscriptionController::class, 'Insert'])->name('Insert');

//Insert Contact route
Route::post('/InsertContact', [ContactController::class, 'InsertContact'])->name('InsertContact');

// Check credential  admin
Route::post('{slug}/login', [UserController::class, 'login_action'])->name('login.action');

Route::post('{slug}/check', [UserController::class, 'check']);

// Check credential  abujad
Route::post('{slug}/loginabujad', [AbujadController::class, 'login_action_abujad'])->name('login.action.abujad');

Route::post('{slug}/checkabujad', [AbujadController::class, 'check']);

// Route::get('{slug}/home', [@App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('{slug}/contacta', [ContactController::class, 'show']);

Route::get('{slug}/inscription_liste', [InscriptionController::class, 'showRegisters'])->name('inscription_liste');

Route::get('{slug}/Bourse_liste', [InscriptionController::class, 'CheckUserLoginBourse'])->name('Bourse_liste');

Route::get('{slug}/downloadBourseFiles/{userCNE}', [BourseController::class, 'downloadBourseFiles'])->name('downloadBourseFiles');

Route::get('{slug}/export/{Filiere}/{Ville}', [ExportExcel::class, 'export'])->name('export');

Route::get('{slug}/exportBourse/{Type}', [ExportExcel::class, 'exportBourse'])->name('exportBourse');

Route::delete('{slug}/contacta{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::delete('{slug}/requests{id}', [InscriptionController::class, 'DeleteRegister'])->name('Inscrire.destroy2');

Route::delete('{slug}/DeleteRegisterBourse_{id}', [BourseController::class, 'DeleteRegisterBourse'])->name('DeleteRegisterBourse');

Route::get('{slug}/panel', [UserController::class, 'CheckUserpanel'])->name('panel');
Route::get('{slug}/panelAbujad', [AbujadController::class, 'CheckAbujadpanel'])->name('panelAbujad');

Route::get('{slug}/contacta', [ContactController::class, 'Checkcontactpanel'])->name('contacta');

Route::get('{slug}/logout', [UserController::class, 'logout'])->name('logout');
Route::get('{slug}/logout_abujad', [AbujadController::class, 'logout_abujad'])->name('logout_abujad');

Route::delete('{slug}/ajoutimage{id}', [ImageController::class, 'DeleteImage'])->name('ajoutimage.DeleteImage');

Route::get('{slug}/PdfStudent/{id}', [InscriptionController::class, 'getRegisterPDF'])->name('PdfStudent');

Route::get('{slug}/PdfStudentBourse/{id}', [BourseController::class, 'getRegisterPDF'])->name('PdfStudentBourse');

//Upload Note files

Route::get('/{slug}/SuiviInscription', function ($slug) {

    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('suivi_Inscription');
})->name('SuiviInscription');

Route::match(array('GET', 'POST'), '{slug}/CheckUserInscrit', [InscriptionCompleteController::class, 'CheckUserInscrit'])->name('CheckUserInscrit');

Route::get('/{slug}/FilesInscription', function ($slug) {
    if (session()->get('Inscr_auth')) {
        if ($slug == 'fr') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else if ($slug == 'ar') {
            App::setLocale($slug);
            session()->put('locale', $slug);
        } else {
            return redirect('/fr');
        }

        return view('FilesInscription');
    } else {
        if ($slug == 'fr') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else if ($slug == 'ar') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else {
            return redirect('/fr');
        }

        return view('suivi_Inscription');
    }

})->name('FilesInscription');

Route::match(array('GET', 'POST'), '{slug}/ajoutfichier{id}', [uploadfiles_Inscr::class, 'storefile'])->name('uploadfiles_Inscr.storefile');

Route::get('{slug}/downloadNotesFiles/{userCNI}', [InscriptionCompleteController::class, 'downloadNotesFiles'])->name('downloadNotesFiles');

//results
Route::get('/{slug}/results', function ($slug) {
    if ($slug == 'fr') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else if ($slug == 'ar') {
        App::setLocale($slug);
        session()->put('locale', $slug);
    } else {
        return redirect('/fr');
    }

    return view('results_cnc');
})->name('results');

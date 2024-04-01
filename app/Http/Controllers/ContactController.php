<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Inscrire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function InsertContact(Request $request){
        $Contact = new Contact;
        $Contact->Full_Name = $request->name;
        $Contact->email = $request->email;
        $Contact->Tele = $request->Tele;
        $Contact->sujet = $request->subject;
        $Contact->message = $request->message;

        $Contact->save();

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès');
    }
    
   



    public function destroy($slug,$id)
{
    if(Auth::check()){
    Contact::findOrFail($id)->delete();

    return redirect()->back()->with('success', 'Contact deleted successfully.');}
    else { return view('admin/Login');}
}




public function show(){
    if(Auth::check()){
    $data = Contact::all();
    return view('contacta',compact('data'))->with('panelactive','contact');}
    else {
        return view('admin/Login');
    }
}

public function Checkcontactpanel()
{
    

    if(Auth::check()){
        $data = Contact::all();
        $msg = DB::table('contacts')->orderBy('id', 'ASC')->get();
        return view(('admin/Contact'),compact('data'))->with('contacts', $msg)->with('Val', 1)->with('panelactive','contact');
    }

    return view('admin/Login');
} 

}

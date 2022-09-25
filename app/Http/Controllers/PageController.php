<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function services(){
        return view('services');
    }

    public function realisations(){
        return view('realisations');
    }

    public function boutiques(){
        return view('boutiques');
    }

    public function contact(){
        return view('contact');
    }

    public function sendMessage(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email',
            'message'   => 'required'
        ]);

        $data = (object)$request->except('_token');

        Mail::to('tiomelafranck724@gmail.com')
            ->send(new ContactMail($data));
        
        return back()->with('message',"Votre message a bien été envoyer");
    }

    public function devis(){
        return view('devis');
    }

    public function postDevis(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email',
            'message'   => 'required',
            'service'   => 'required'
        ]);

        if(!in_array($request->service,['Création & Entretien des piscines','Vente des produits d\'entretien','Plomberie','Réalisation des forages & traitement des eaux','Peinture bâtiment','Vidange des fosses'])){
            return back();
        }

        $data = (object)$request->except('_token');

        Mail::to('tiomelafranck724@gmail.com')
            ->send(new ContactMail($data,'devis'));
        
        return back()->with('message',"Votre devis a bien été envoyer");
    }
    
}

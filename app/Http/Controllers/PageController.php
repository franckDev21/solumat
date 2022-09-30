<?php

namespace App\Http\Controllers;

use App\Mail\CommandeMail;
use App\Mail\ContactMail;
use App\Models\Product;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        // $products = Product::latest()->take(3)->get();
        $products = Product::orderBy('updated_at', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->filter(request(['search']))
            ->paginate(3);
        return view('home', compact('products'));
    }

    public function services(){
        return view('services');
    }

    public function realisations(){
        $projects = Projet::orderBy('updated_at', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->filter(request(['search']))
        ->paginate(6);
        return view('realisations',compact('projects'));
    }

    public function boutiques(){
        $products = Product::orderBy('updated_at', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->filter(request(['search']))
            ->paginate(6);
        return view('boutiques',compact('products'));
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

    public function commander(Product $product){
        return view('commande.index',compact('product'));
    }

    public function commanderStore(Request $request){

        $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email',
            'tel'   => 'required',
        ]);

        $data = $request->except('_token');

        if(!$request->product){
            return back();
        }

        $product = Product::findOrFail($request->product);

        $data = array_merge($data,[
            'product' => $product
        ]);

        Mail::to('tiomelafranck724@gmail.com')
            ->send(new CommandeMail((object)$data));

        return back()->with('message',"Votre commande a bien été enregistrer");

    }
    
}

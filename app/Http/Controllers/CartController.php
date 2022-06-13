<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    //ajouter un article au panier
    public function ajouterArticle(Request $request){
        $article = Article::find($request->id);
        if($request->qty){
            $qty=$request->qty;
        }else{
            $qty=1;
        }
        Cart::add(array(
            'id' => $article->id, 
            'name' => $article->Titre,
            'price' => $article->Prix,
            'quantity' => $qty,
            'attributes' => array(
               'refArticle'=>$article->refArticle,
               'image'=>$article->Images,
               'categorie'=>$article->Categorie,
               'new'=>$article->New
            )
        ));

        return redirect(route('afficherPanier'));
    }

    public function afficherPanier(){
        $panier=Cart::getContent();
        $nbrArticle=$panier->count();
        $panierTotal=Cart::getTotal();
        return view("panier",compact('panier', 'panierTotal', 'nbrArticle'));
    }

    public function supprimerArticle(Request $request){
        Cart::remove($request->id);

        return back()->with('success', 'Product successfuly removed');
    }

    public function modifierQuantité(Request $request){

        Cart::update($request->id, array(
            'quantity' => array(
                            'relative' => false,
                            'value' => $request->qtym),
          ));

        $panier=Cart::getContent();
        $nbrArticle=$panier->count();
        $panierTotal=Cart::getTotal();
        return view("panier",compact('panier', 'panierTotal', 'nbrArticle'));

    }

}

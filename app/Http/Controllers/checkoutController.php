<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use \Stripe\PaymentIntent;

class checkoutController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Cart::getContent()->count()  <= 0){
            return redirect()->route('Boutique');
        }

        Stripe::setApiKey('sk_test_51IE2e0HqCuWYTxAV7JT1xnbtZzu8LJgX3No0GEd707lgRgSMCqJb3GXbUmAFXT6Uef86XEwnoBQRB23F4gXv1dOD00kvjQ3tdY');


        $intent = PaymentIntent::create([
            'amount' =>round(Cart::getTotal()),
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment',
                            'user_id' => Auth::user()->id,
                            ],
        ]);
        
        $clientSecret = Arr::get($intent, 'client_secret');
        return view('checkout.index', [
            'client_secret' => $clientSecret,
            'panierTotal'   => Cart::getTotal(),
            'panier'        => Cart::getContent(),
            'nbrArticle'    => Cart::getContent()->count() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function merci()
    {
        //
        $panierTotal=Cart::getTotal();
        $panier=Cart::getContent(); 
        $nbrArticle=$panier->count();

        return view('checkout.thankyou', compact('nbrArticle', 'panierTotal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $items = Cart::getContent();
        foreach($items as $item){
            Cart::remove($item->id);
        }


        $data = $request->json()->all();

        return $data['paymentIntent'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

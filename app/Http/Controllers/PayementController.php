<?php

namespace App\Http\Controllers;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;


class PayementController extends Controller
{
    public function creat($fraisTotal)
    {
        // Afficher le formulaire de paiement
        return view('paiment/paiment',compact('fraisTotal'));
    }

    public function process(Request $request)
    {
        
            // Récupérer les données du formulaire
            $montant = $request->input('amount');
    
            // Créer une commande via l'API PayPal
            $orderID = $this->createPayPalOrder($montant);
    
            // Rediriger l'utilisateur vers PayPal pour effectuer le paiement
            return redirect()->away('https://www.paypal.com/checkoutnow?token=' . $orderID);
        }
    
        private function createPayPalOrder($montant)
        {
            $client = new \PayPalCheckoutSdk\Core\PayPalHttpClient($this->environment());
            $request = new OrdersCreateRequest();
            $request->prefer('return=representation');
            $request->body = [
                "intent" => "CAPTURE",
                "purchase_units" => [[
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $montant
                    ]
                ]]
            ];
            try {
                $response = $client->execute($request);
                return $response->result->id; // Renvoie l'ID de la commande pour la redirection vers PayPal
            } catch (HttpException $e) {
                return $e->getMessage(); // Gérer les erreurs éventuelles
            }
        }
    
        private function environment()
        {
            $clientId = env('PAYPAL_CLIENT_ID');
            $secret = env('PAYPAL_SECRET');
    
            return new \PayPalCheckoutSdk\Core\SandboxEnvironment($clientId, $secret);
        }
}

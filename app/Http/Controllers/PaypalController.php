<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function paypal(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('success'),
                    "cancel_url" => route('cancel'),
                ],
                "purchase_units" => [[
                    "amount" =>
                    [
                        "currency_code" => "BRL",
                        "value" => "100.00"
                    ]
                ]]
            ]);

            if(isset($response['id']) && $response['id'] != null)
            {
                foreach($response['links'] as $link)
                {
                    if($link['rel'] == 'approve')
                    {
                        // Isso aqui ta errado de onde vai tirar product_name ??
                        session()->put('product_name', $request->product_name);
                        // Isso aqui tambem,, de onde vai sair quantity ??
                        session()->put('quantity', $request->quantity);
                        return redirect()->away($link['href']);
                    }
                }
            }else{
                return redirect()->route('cancel');
            }
        //dd($response);
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        if(isset($response['status']) && $response['status'] == 'COMPLETED')
        {
            $payment = new Payment;
            $payment->payment_id = $response['id'];
            $payment->product_name = session()->get('product_name');
            $payment->quantity = session()->get('quantity');
            $payment->amount = $response['purchase_units'][0]['payments']['captures'][0]['amount']['values'];
            $payment->currency = $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'];
            $payment->payer_name = $response['payer']['name']['given_name'];
            $payment->payer_email = $response['payer']['email_address'];
            $payment->payment_status = $response['status'];
            $payment->payment_method = "PayPal";
            $payment->save();

            return "Payment is successful";

            unset($_SESSION['product_name']);
            unset($_SESSION['quantity']);
        } else {
            return redirect()->route('cancel');
        }
    }

    public function cancel()
    {
        return "Payment cancelled";
    }
}

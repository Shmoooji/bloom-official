<?php

namespace App\Http\Controllers;

use App\Models\CampaignPayment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

use Auth;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct() 
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function index() 
    {
        return view('payment.options');
    }

    public function createPaymentPaypal(Request $request) 
    {
        try 
        {
            $response = $this->gateway->purchase(array(
                'amount'    => $request->amount,
                'currency'  => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('/payment/success'),
                'cancelUrl' => url('/payment/error'),
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            
            return redirect()->back()->with([
                'message' => $response->getMessage(),
            ]);
        } 
        catch (\Throwable $th) 
        {
            return $th->getMessage();
        }
    }

    public function handleSuccess(Request $request) 
    {
        try {
            $PayerID = $request->query('PayerID');
            $PaymentID = $request->query('paymentId');

            if (!$PayerID || !$PaymentID) {
                return abort(400);
            }

            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $PayerID,
                'transactionReference' => $PaymentID,
            ));

            $response = $transaction->send();

            if (!$response->isSuccessful()) {
                return abort(400);
            }

            $info = array_merge($request->all(), array(
                'user_id'             => Auth::id(),
                'campaign_type'       => 3,
                'payment_method'      => 'PayPal',
                'subscription_period' => 3,
                'payment_id'          => $PaymentID
            ));

            if (CampaignPayment::paymentIsUnique($info['payment_id'])) {
                CampaignPayment::savePaypalInfo($info);
            }

            return view('payment.success')
                    ->with('paymentID', $PaymentID)
                    ->with('payerID', $PayerID);
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function handleError() 
    {
        return view('payment.error');
    }
}

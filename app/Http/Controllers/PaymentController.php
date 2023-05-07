<?php

namespace App\Http\Controllers;

use App\Models\CampaignPayment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function index() {
        return view('payment.options');
    }

    public function createPaymentPaypal(Request $request) {
        try {
           
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('/payment/success'),
                'cancelUrl' => url('/payment/error'),

            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request) {
        $paymentID = $request->query('paymentId');
        $payerID = $request->query('PayerID');

        if (!empty($paymentID) && !empty($payerID)) {

            $info = $request->all();

            $info['user_id'] = 4;
            $info['campaign_type'] = 3;
            $info['payment_method'] = 'PayPal';
            $info['subscription_period'] = 6;
            $info['payment_id'] = $paymentID;


            CampaignPayment::savePaymentInfo($info);

            return view('payment.success')
            ->with('paymentID', $paymentID)
            ->with('payerID', $payerID);
        }
    }
}

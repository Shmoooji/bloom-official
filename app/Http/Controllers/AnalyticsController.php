<?php

namespace App\Http\Controllers;

use App\Models\Analytics;
use App\Models\CampaignPayment;
use Illuminate\Http\Request;
use View;

class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // echo $analytics_data;
        //return view('/graphs', $analytics_data]));
        $analytics_data = CampaignPayment::all();
        return view('graphs', ['analytics_data' => $analytics_data]);
        //return ($analytics_data);
        //return CampaignPayment::all();
    }

    public function getPrefPaymentMethod(){
        $paymaya = CampaignPayment::where('payment_method', 'PayMaya')->count();
        $gcash = CampaignPayment::where('payment_method', 'GCash')->count();
        $paypal = CampaignPayment::where('payment_method', 'PayPal')->count();
        $prefPaymentMethod = json_encode(['PayMaya'=>$paymaya, 'GCash'=>$gcash, 'PayPal'=>$paypal]);
        return view('graphs',['prefPaymentMethod' => $prefPaymentMethod]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function show(Analytics $analytic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function edit(Analytics $analytic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analytics $analytic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analytic  $analytic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analytics $analytic)
    {
        //
    }
}

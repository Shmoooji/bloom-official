<?php

namespace App\Http\Controllers;
use App\Models\Analytics;
use App\Models\CampaignPayment;
use App\Models\Deal;
use Illuminate\Http\Request;
use View;
use App\Models\Campaign;

class AnalyticsController extends Controller
{
    

public function index(){
    return view('analytics');
}

public function getPrefPaymentMethod(){
        $paymaya = CampaignPayment::where('payment_method', 'PayMaya')->count();
        $gcash = CampaignPayment::where('payment_method', 'GCash')->count();
        $paypal = CampaignPayment::where('payment_method', 'PayPal')->count();
        $prefPaymentMethod = json_encode(['PayMaya'=>$paymaya, 'GCash'=>$gcash, 'PayPal'=>$paypal]);
        return view('graphs',['prefPaymentMethod' => $prefPaymentMethod]);
}

public function fetch_campaign_list(){

    $campaign_model = new Campaign();
    $campaign_list = $campaign_model->fetch_campaign_list();
    $campaign_list = $this->campaign_label($campaign_list);
    $campaign_list = $this->money_format($campaign_list);
    return response()->json($campaign_list);

}

public function getCampaignLocations(){
    $locations = CampaignPayment::select('bill_country', \DB::raw('count(*) as count'))
                 ->groupBy('bill_country')
                 ->get();

    return response()->json($locations);
}

private function campaign_label($campaign_list){

    $collection = collect($campaign_list);

    $campaign_list = $collection->map(function($item){

        $id_label = "Campaign ".$item->id;

        $item->id_label = $id_label;


        return $item;

    });

    return $campaign_list->all();

}

private function money_format($campaign_list){

    $collection = collect($campaign_list);

    $campaign_list = $collection->map(function($item){

        $amount = number_format($item->amount,'2','.',',');

        $item->amount = $amount;


        return $item;

    });

    return $campaign_list->all();

}

public function getStageDealRatio(){
    $totaldeals = Deal::all()->count();
    $new = Deal::where('stage_deal', 'New')->count();
    $inprogress = Deal::where('stage_deal', 'In Progress')->count();
    $closed = Deal::where('stage_deal', 'Closed')->count();
    $new = ($new / $totaldeals)*100;
    $inprogress = ($inprogress / $totaldeals)*100;
    $closed = ($closed/$totaldeals)*100;
    $data = [$new, $inprogress, $closed];
    $labels = ["New", "In Progress", "Closed"];
    $retval = json_encode(['labels'=>$labels, 'data'=>$data]);
    return $retval;
}




}

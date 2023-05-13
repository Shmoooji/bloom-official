<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class AnalyticsController extends Controller
{
    

public function index(){

    return view('analytics');

}

public function fetch_campaign_list(){

    $campaign_model = new Campaign();
    $campaign_list = $campaign_model->fetch_campaign_list();
    $campaign_list = $this->campaign_label($campaign_list);
    $campaign_list = $this->money_format($campaign_list);

    

    return response()->json($campaign_list);

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





}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    protected function index(){
        return view('campaigns');
    }

    public function get_campaigns() {
        $campaigns = new Campaign();
        return $campaigns->get_campaigns();
    }

}
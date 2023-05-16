<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Campaign extends Model
{
    use HasFactory;

    protected $table = 'campaigns';

    protected $primaryKey = 'id';

    public function fetch_campaign_list(){


        $query = DB::table('campaigns');
        $data = $query->join('campaign_payments', 'campaigns.id','=','campaign_payments.campaign_id')
        ->orderBy('campaigns.id', 'desc')->get()->toArray();
        return $data;

    }
}

<?php

namespace App\Http\Controllers\Cabinet;

use App\Filters\Referrals\Histroy\HistoryFilter;
use App\Http\Controllers\Controller;
use App\Models\ReferralHistory;
use Illuminate\Http\Request;

class ReferralHistoryController extends Controller
{
    public function index(HistoryFilter $filter){
       $referral_histories = ReferralHistory::getReferralHistories($filter);
       return view('cabinet.referrals.history.index',compact('referral_histories'));
    }
}

<?php

namespace App\Http\Controllers\Cabinet;


use App\Filters\Referrals\ReferralFilter;
use App\Http\Controllers\Controller;
use App\Jobs\AffiliatePercentJob;
use App\Models\ReferralHistory;
use App\Models\User;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index(ReferralFilter $filter){
       $user = User::getAuthReferralsCount();
       $referrals = User::getUserReferrals($filter);
       $user_referrals_deposit_cash_back_sum = $user->referralsHistory->sum('referral_deposit_cash_back');
       return view('cabinet.referrals.index',compact('referrals','user','user_referrals_deposit_cash_back_sum'));
    }
}

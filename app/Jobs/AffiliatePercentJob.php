<?php

namespace App\Jobs;

use App\Models\ReferralHistory;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class AffiliatePercentJob implements ShouldQueue
{
   use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

   private $name;
   private $deposit;

   /**
    * Create a new job instance.
    *
    * @return void
    */
   public function __construct($name, $deposit)
   {
      //
      $this->name = $name;
      $this->deposit = $deposit;
   }

   /**
    * Execute the job.
    *
    * @return void
    */
   public function handle()
   {
      $user = User::query()->where('name', $this->name)->select('id','structure_path')->firstOrFail();
      $setting = Setting::query()->first();

      if ($user->structure_path) {

         $structure_path = explode('-', $user->structure_path);
         $reverse_structure_path = array_reverse($structure_path);

         $data = [];
         foreach ($reverse_structure_path as $key => $value) {
            $refback = (double) ((double) $this->deposit * (double) array_values($setting['affiliate_percent'])[$key]) / 100;

            User::updateOrAttachCryptoByAffiliate($value,$refback,'USDT.TRC20');

            $data[] = [
                'user_id' => $value,
                'referral_id' => $user->id,
                'referral_deposit_cash_back' => $refback,
                'level' => $key+1,
                'created_at' => now(),
                'updated_at' => now()
            ];

         }

          ReferralHistory::query()->insert($data);
      };

   }
}

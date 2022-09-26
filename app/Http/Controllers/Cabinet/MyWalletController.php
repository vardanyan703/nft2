<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests\MyWalletRequest;
use App\Http\Resources\MyWalletResource;
use App\Models\Crypto;
use App\Models\MyWallet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MyWalletController extends Controller
{
    public function index(){
       $cryptos = Crypto::query()
           ->orderBy('order','ASC')
          ->get()
          ->pluck('name','id');

       $user_current_wallets = MyWallet::query()
          ->where('user_id',auth()->user()->id)
          ->get()
          ->pluck('wallet_number','crypto_id');

       $canEdit = MyWallet::query()->where('user_id',auth()->user()->id)->where('editing',0)->first('editing');


       return view('cabinet.my-wallets.index',compact('cryptos','user_current_wallets','canEdit'));
    }


    public function store(MyWalletRequest $request){
       try{
          $data = $request->validated();
             MyWallet::query()->create([
                'user_id' => auth()->user()->id,
                'crypto_id' => $data['payment_system'],
                'wallet_number' => $data['wallet_number'],
                'tag' => $data['tag'],
                'editing' => isset($data['wallet_allow_edit']) ? $data['wallet_allow_edit'] : 1 ,
             ]);

       return back()->withStatus('Successfully created');

       }catch (\Exception $exception){
          return back()->withErrors($exception->getMessage());
       }
    }

    public function getUserWallet(Request $request){
       $myWallet = MyWallet::query()
          ->where('user_id',auth()->user()->id)
          ->where('crypto_id',+$request->crypto_id)
          ->first();

        $myWallet = $myWallet ?? new MyWallet();


        $html = view('cabinet.my-wallets.render.render',compact('myWallet'))->render();
              return response()->json([
                'html' => $html,
                'my_wallet' => $myWallet
              ]);

    }

    public function update(MyWalletRequest $request,int $id){
       $my_wallet = MyWallet::query()->where('user_id',auth()->user()->id)->findOrFail($id);
       $data = $request->validated();
       $my_wallet->update([
          'wallet_number' => $data['wallet_number'],
          'tag' => $data['tag'],
          'editing' => isset($data['wallet_allow_edit']) ? $data['wallet_allow_edit'] : 1 ,
       ]);

       return back()->withStatus('Successfully updated');
    }
}

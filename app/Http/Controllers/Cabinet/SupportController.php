<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
       $contacts = Support::query()
          ->where('user_id',auth()->user()->id)
          ->with(['user'])
          ->orderByDesc('id')
          ->paginate(5);
       return view('cabinet.support.index',compact('contacts'));
    }


    public function store(ContactRequest $request){
         Support::query()->create($request->validated());

         return back()->withStatus('Thank you for contacting us. We will respond to the email address provided in the request.');

    }
}

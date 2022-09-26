<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Referral
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $parent = User::query()
           ->whereName($request->segment(2))
           ->with('nestedParent')
           ->select('id','name','referred_by')
           ->first();

        session()->put('referred_by',$parent ?? null);

        return redirect()->route('home');
    }
}

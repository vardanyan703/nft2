<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\LiveStatistic;
use App\Models\News;
use App\Models\Tariff;
use App\Models\VideoReview;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $tariffs = Tariff::query()
            ->with('attachment')
            ->where('id','!=',99999)
            ->where('published','!=',0)
            ->get();

        $faq = Faq::query()
            ->latest()
            ->first();

        $live = LiveStatistic::query()->first();

        return view('home', compact('tariffs', 'live', 'faq'));
    }

    public function about()
    {
        return view('about');
    }

    public function mainNews()
    {
        $news = News::query()
            ->with('attachment')
            ->orderBy('id', 'desc')
            ->get();
        return view('main_news', compact('news'));
    }

    public function faq()
    {
        $faq = Faq::query()
            ->latest()
            ->first();
        return view('faq', compact('faq'));
    }

    public function termsAndConditions()
    {
        return view('termsAndConditions');
    }


    public function passwordChangeDone()
    {
       if(session()->has('change'))
            return view('auth.passwords.success');

       return abort('404');
    }

    public function affiliate()
    {
        return view('affiliate');
    }
}

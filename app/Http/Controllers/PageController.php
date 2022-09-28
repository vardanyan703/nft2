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
         ->get();

       $faq = Faq::query()
           ->latest()
           ->first();

       $live = LiveStatistic::query()->first();

      return view('home',compact('tariffs','live','faq'));
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
      return view('faq',compact('faq'));
   }

   public function rules()
   {
      return view('rules');
   }


   public function videoReviews()
   {
      $video_reviews = VideoReview::query()
         ->orderBy('id', 'desc')
         ->get();
       return view('video_reviews',compact('video_reviews'));
    }

    public function affiliate(){
       return view('affiliate');
    }
}

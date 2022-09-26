<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
       $news = News::query()
          ->with('attachment')
          ->orderBy('id','desc')
          ->get();
       return view('cabinet.news.index',compact('news'));
    }
}

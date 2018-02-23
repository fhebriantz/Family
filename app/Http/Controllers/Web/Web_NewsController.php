<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\News;

class Web_NewsController extends Controller
{
    public function show(){  
    	$news = News::all();
    	return view('pages/web/news/news', compact('news'));
    }
    public function showdetail(){  
    	$news = News::all();
    	return view('pages/web/news/newsdetail', compact('news'));
    }
}

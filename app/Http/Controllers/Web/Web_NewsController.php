<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\News;
use App\Http\Model\About;

class Web_NewsController extends Controller
{
    public function show(){  
    	$abouts = About::all()->first();
    	$news = News::all();
    	return view('pages/web/news/news', compact('news','abouts'));
    }
    function view($id)
    {
        $news = News::all()->where('id','=',$id)->first();
        return view('pages/web/news/newsdetail', compact('news'));
    }
}

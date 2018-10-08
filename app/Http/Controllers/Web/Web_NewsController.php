<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\News;
use App\Http\Model\About;
use vendor\autoload;
use App;

class Web_NewsController extends Controller
{
    public function show(){ 
        App::setLocale(session()->get('lang'));
    	$abouts = About::all()->first();
    	$news = News::all();
    	return view('pages/web/news/news', compact('news','abouts'));
    }
    function view($id)
    {
        App::setLocale(session()->get('lang'));
        $news = News::all()->where('id','=',$id)->first();
        return view('pages/web/news/newsdetail', compact('news'));
    }
}

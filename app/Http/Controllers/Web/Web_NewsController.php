<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\News;
use App\Http\Model\About;
use App\Http\Model\Images;
use App\Http\Model\Category_product;
use vendor\autoload;
use App;

class Web_NewsController extends Controller
{
    public function show(){ 
        App::setLocale(session()->get('lang'));
    	$abouts = About::all()->first();
    	$news = News::getNews();
        $ourstory = Images::where('flag','=',7)->first();
        $catpro = Category_product::all();
    	return view('pages/web/news/news', compact('news','abouts','catpro','ourstory'));
    }
    function view($id)
    {
        App::setLocale(session()->get('lang'));
        $news = News::all()->where('id','=',$id)->first();
        $catpro = Category_product::all();
        return view('pages/web/news/newsdetail', compact('news','catpro'));
    }
}

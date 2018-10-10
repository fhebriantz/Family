<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\About;
use App\Http\Model\Images;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Application;
use vendor\autoload;
use App;
use Session;
use Carbon;

class Web_IndexController extends Controller
{
    public function show($locale=null){  
    	App::setLocale(session()->get('lang'));
    	$abouts = About::all()->first();
    	$highlight1 = Images::where('flag','=',1)->first();
    	$highlight2 = Images::where('flag','=',2)->first();
    	$highlight3 = Images::where('flag','=',3)->first();
        $slider1 = Images::where('flag','=',4)->first();
        $slider2 = Images::where('flag','=',5)->first();
        $slider3 = Images::where('flag','=',6)->first();
        $ourstory = Images::where('flag','=',7)->first();
    	return view('pages/web/index/index', compact('slider1','slider2','slider3','abouts','highlight1','highlight2','highlight3','ourstory'));
    }

    public function bahasa(Request $request){
    	$request->session()->forget('lang');
    	$request->session()->put('lang', 'id');
        return Redirect::back();

    }

    public function english(Request $request){
    	$request->session()->forget('lang');
    	$request->session()->put('lang', 'en');
        return Redirect::back();    	
    }
}

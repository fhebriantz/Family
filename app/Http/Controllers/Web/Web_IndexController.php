<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\About;
use App\Http\Model\Highlight;
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
    	$highlight1 = Highlight::where('flag','=',1)->first();
    	$highlight2 = Highlight::where('flag','=',2)->first();
    	$highlight3 = Highlight::where('flag','=',3)->first();
    	return view('pages/web/index/index', compact('abouts','highlight1','highlight2','highlight3'));
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

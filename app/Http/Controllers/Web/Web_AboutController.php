<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Model\Images;
use App\Http\Controllers\Controller;
use App\Http\Model\About;
use vendor\autoload;
use App;

class Web_AboutController extends Controller
{
    public function show(){  
    	App::setLocale(session()->get('lang'));
    	$highlight3 = Images::where('flag','=',3)->first();
    	$abouts = About::all();
    	return view('pages/web/about/about', compact('abouts','highlight3'));
    }
}

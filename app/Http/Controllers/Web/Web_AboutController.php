<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\About;
use App;

class Web_AboutController extends Controller
{
    public function show(){  
    	App::setLocale(session()->get('lang'));
    	$abouts = About::all();
    	return view('pages/web/about/about', compact('abouts'));
    }
}

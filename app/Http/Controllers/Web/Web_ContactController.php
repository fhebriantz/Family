<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\About;
use vendor\autoload;
use App;

class Web_ContactController extends Controller
{
    public function show(){  
    	App::setLocale(session()->get('lang'));
    	$abouts = About::all();
    	return view('pages/web/contact/contact', compact('abouts'));
    }
}

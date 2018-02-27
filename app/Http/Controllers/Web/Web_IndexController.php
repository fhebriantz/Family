<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\About;
use App\Http\Model\Highlight;

class Web_IndexController extends Controller
{
    public function show(){  
    	$abouts = About::all()->first();
    	$highlight1 = Highlight::where('flag','=',1)->first();
    	$highlight2 = Highlight::where('flag','=',2)->first();
    	$highlight3 = Highlight::where('flag','=',3)->first();
    	return view('pages/web/index/index', compact('abouts','highlight1','highlight2','highlight3'));
    }
}

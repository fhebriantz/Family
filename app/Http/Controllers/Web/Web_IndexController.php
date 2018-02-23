<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\About;

class Web_IndexController extends Controller
{
    public function show(){  
    	$abouts = About::all();
    	return view('pages/web/index/index', compact('abouts'));
    }
}

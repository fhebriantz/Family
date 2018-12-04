<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Faq;
use App\Http\Model\Contact;
use App\Http\Model\Category_product;
use vendor\autoload;
use App;

class Web_ContactController extends Controller
{
    public function show(){  
    	App::setLocale(session()->get('lang'));
    	$faq = Faq::all();
    	$contact = Contact::all();
    	$catpro = Category_product::all();
    	return view('pages/web/contact/contact', compact('faq','contact','catpro'));
    }
}

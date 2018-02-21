<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Forgotpass;
use Auth;

class ForgotpassController extends Controller
{
    public function show(){ 
    	$forgotpass = Forgotpass::all();
        $no = 1;

    	return view('pages/cms/forgotpass/forgotpass', compact('forgotpass','no'));
    }
}

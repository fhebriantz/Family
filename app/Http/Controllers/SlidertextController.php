<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use Auth;
use App\Http\Model\Images;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Middleware\LoginCheck;
use vendor\autoload;
use Illuminate\Support\Facades\Redirect;

class SlidertextController extends Controller
{

    public function __construct()
    {
        $this->middleware('logincheck');
    }


    function edit_slidertext($id)
    {
    	$slidertext=Images::where('id','=',$id)->first();
    	return  view('pages/cms/slidertext/slidertextedit')
    	->with('slidertext_data',$slidertext);
    }


    public function show_slidertext(){ 
    	$slidertext = Images::all()
        ->where('flag','!=',1)
        ->where('flag','!=',2)
        ->where('flag','!=',3)
        ->where('flag','!=',7)
        ->where('flag','!=',8)
        ->where('flag','!=',9)
        ->where('flag','!=',10)
        ->where('flag','!=',11)
        ->where('flag','!=',12)
        ->where('flag','!=',13);
        $no = 1;

    	return view('pages/cms/slidertext/slidertext', compact('slidertext','no'));
    }

    // menampilkan fungsi edit
    function update_slidertext (Request $request, $id)  
    {
        $validatedData = $request->validate([
                'text' => 'required',
            ]);
        if(Input::get('submit')) 
        {
        	$slidertext = Images::find($id);

        		// nama = nama field di database, var_nama = var_nama di dalam form input_blade$slidertext->title = $request->title; 
        		$slidertext->text = $request->text;

                $slidertext->updated_by = session()->get('session_name');

        	// untuk mengsave
        	$slidertext->save();

        	// sama aja kaya href setelak klik submit
        	// mau pindah ke link mana setelah tombol submit di klik
        	return  redirect('cms/slidertext');
        }
    }
}

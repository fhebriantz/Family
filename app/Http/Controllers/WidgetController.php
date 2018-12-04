<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Widget;
use Illuminate\Routing\Middleware\LoginCheck;
use vendor\autoload;
use Auth;

class WidgetController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    
    public function show(){ 
    	$widget = Widget::all();

    	return view('pages/frontend/widget/widget', compact('widget'));
    }

    function edit($id)
    {
    	$widget=Widget::where('id','=',$id)->first();

    	return  view('pages/cms/widget/widgetedit')
    	->with('widget_data',$widget);
    }

    public function showcms(){ 
    	$widget = Widget::all();
         $no = 1;

    	return view('pages/cms/widget/widget', compact('widget','no'));
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([
                'embed_text' => 'required',
            ]);
        
    	$widget = Widget::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $widget->embed_text = $request->embed_text; 
            $widget->updated_by = session()->get('session_name'); 
    	// untuk mengsave
    	$widget->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/widget');
    }

}

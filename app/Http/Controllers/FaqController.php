<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Faq;
use Auth;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(){ 
    	$faq = Faq::all();

    	return view('pages/frontend/faq/faq', compact('faq'));
    }

    function input()
    {
    	return  view('pages/cms/faq/faqinput');
    }

    function edit($id)
    {
    	$faq=Faq::where('id','=',$id)->first();

    	return  view('pages/cms/faq/faqedit')
    	->with('faq_data',$faq);
    }

    function view($id)
    {
        $faq=Faq::where('id','=',$id)->first();

        return  view('pages/cms/faq/faqview')
        ->with('faq_data',$faq);
    }

    public function showcms(){ 
    	$faq = Faq::all();
         $no = 1;

    	return view('pages/cms/faq/faq', compact('faq','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
          $validatedData = $request->validate([

                'title' => 'required',
                'desc' => 'required',
            ]);

    	$faq = new Faq;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$faq->title = $request->title; 
    		$faq->desc = $request->desc;
            $faq->created_by = Auth::user()->name; 
    	// untuk mengsave
    	$faq->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/faq');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'title' => 'required',
                'desc' => 'required',
            ]);
        
    	$faq = Faq::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$faq->title = $request->title; 
    		$faq->desc = $request->desc;
            $faq->updated_by = Auth::user()->name; 
    	// untuk mengsave
    	$faq->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/faq');
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$faq = Faq::find($id);
    	$faq->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/faq');
    } 
}

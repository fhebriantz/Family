<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use Auth;
use App\Http\Model\About;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){ 
    	$abouts = About::all();

    	return view('pages/frontend/about/about', compact('abouts'));
    }

    // aaaaa

    public function test(){ 
        $abouts = About::GetTableAbout();

        return view('pages/frontend/about/about', compact('abouts'));
    }
    // ssss


	function input()
    {
    	return  view('pages/cms/about/aboutinput');
    }

    function edit($id)
    {
    	$abouts=About::where('id','=',$id)->first();
    	return  view('pages/cms/about/aboutedit')
    	->with('about_data',$abouts);
    }

    function view($id)
    {
        $abouts=About::where('id','=',$id)->first();

        return  view('pages/cms/about/aboutview')
        ->with('about_data',$abouts);
    }

    public function showcms(){ 
    	$abouts = About::all();
        $no = 1;

    	return view('pages/cms/about/about', compact('abouts','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'ket' => 'required',
                'title' => 'required',
                'desc' => 'required|min:50',
            ]);

    	$abouts = new About;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $abouts->ket = $request->ket; 
    		$abouts->title = $request->title; 
    		$abouts->desc = $request->desc;
            $abouts->created_by = Auth::user()->name; 
    	// untuk mengsave
    	$abouts->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/about');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([
                'ket' => 'required',
                'title' => 'required',
                'desc' => 'required|min:50',
            ]);
        
    	$abouts = About::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $abouts->ket = $request->ket; 
    		$abouts->title = $request->title; 
    		$abouts->desc = $request->desc;
            $abouts->updated_by = Auth::user()->name ;
    	// untuk mengsave
    	$abouts->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/about');
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$abouts = About::find($id);
    	$abouts->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/about');
    } 

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use Auth;
use Illuminate\Routing\Middleware\LoginCheck;
use App\Http\Model\Images;
use Illuminate\Support\Facades\Input;
use vendor\autoload;
use Illuminate\Support\Facades\Redirect;

class ImagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('logincheck');
    }

    public function show(){ 
    	$highlight = Images::all();

    	return view('pages/frontend/highlight/highlight', compact('highlight'));
    }


	function input()
    {
    	return  view('pages/cms/highlight/highlightinput');
    }

    function edit($id)
    {
    	$highlight=Images::where('id','=',$id)->first();
    	return  view('pages/cms/highlight/highlightedit')
    	->with('highlight_data',$highlight);
    }

    function view($id)
    {
        $highlight=Images::where('id','=',$id)->first();

        return  view('pages/cms/highlight/highlightview')
        ->with('highlight_data',$highlight);
    }

    public function showcms(){ 
    	$highlight = Images::all();
        $no = 1;

    	return view('pages/cms/highlight/highlight', compact('highlight','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'namefile' => 'required|unique:highlight',
                'flag' => 'required',
            ]);

    	$highlight = new Images;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$highlight->flag = $request->flag; 
            if($request->file('namefile') == "")
            {
                $highlight->namefile = $highlight->namefile;
            } 
             else
            {
                $files       = $request->file('namefile');
                $fileNames   = $files->getClientOriginalName();
                $request->file('namefile')->move("C:/xampp/htdocs/family/public/asset/img", $fileNames);
                $highlight->namefile = $fileNames;
            }
            $highlight->created_by = session()->get('session_name'); 
    	// untuk mengsave
    	$highlight->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/highlight');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
       $validatedData = $request->validate([

                'namefile' => 'required',
            ]);
        if(Input::get('submit')) 
        {
        	$highlight = Images::find($id);

            
             if($request->file('namefile') == "" || $request->file('namefile') == null)
            {
                $highlight->namefile = $highlight->namefile;
            } 
             else
            {
                $this->validate($request, [
                    'namefile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $files      = $request->file('namefile');
                $fileNames   = 'c'.time().'.'.$files->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $files->move($destinationPath, $fileNames);
                $highlight->namefile = $fileNames;
            }

            $highlight->created_by = session()->get('session_name'); 
    		// untuk mengsave
    		$highlight->save();

        	return  redirect('cms/highlight');
        }

        elseif(Input::get('deletes')) 
        {
            $highlight = Images::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade 
            $highlight->updated_by = session()->get('session_name');

            $nol="";
            $highlight->namefile = $nol;

            $highlight->save();

            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            $request->session()->flash('status', 'Picture "Image" has been deleted');
            return  Redirect::back();
        }
    }
}


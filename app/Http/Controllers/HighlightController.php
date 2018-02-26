<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use Auth;
use App\Http\Model\Highlight;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HighlightController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){ 
    	$highlight = Highlight::all();

    	return view('pages/frontend/highlight/highlight', compact('highlight'));
    }


	function input()
    {
    	return  view('pages/cms/highlight/highlightinput');
    }

    function edit($id)
    {
    	$highlight=Highlight::where('id','=',$id)->first();
    	return  view('pages/cms/highlight/highlightedit')
    	->with('highlight_data',$highlight);
    }

    function view($id)
    {
        $highlight=Highlight::where('id','=',$id)->first();

        return  view('pages/cms/highlight/highlightview')
        ->with('highlight_data',$highlight);
    }

    public function showcms(){ 
    	$highlight = Highlight::all();
        $no = 1;

    	return view('pages/cms/highlight/highlight', compact('highlight','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'namefile' => 'required',
                'flag' => 'required',
            ]);

    	$highlight = new Highlight;

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
            $highlight->created_by = Auth::user()->name; 
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
                'flag' => 'required',
            ]);
        if(Input::get('submit')) 
        {
        	$highlight = new Highlight;

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
            $highlight->created_by = Auth::user()->name; 
    		// untuk mengsave
    		$highlight->save();

        	// sama aja kaya href setelak klik submit
        	// mau pindah ke link mana setelah tombol submit di klik
        	return  redirect('cms/highlight');
        }

        elseif(Input::get('deletes')) 
        {
            $highlight = Highlight::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $highlight->flag = $request->flag; 
            $highlight->updated_by = Auth::user()->name;

            $nol="";
            $highlight->namefile = $nol;

            $highlight->save();

            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            $request->session()->flash('status', 'Picture "Image" has been deleted');
            return  Redirect::back();
        }
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$namefile = Highlight::find($id);
    	$namefile->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/highlight');
    } 

}


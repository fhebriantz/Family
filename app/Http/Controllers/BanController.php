<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Ban;
use Illuminate\Routing\Middleware\LoginCheck;
use vendor\autoload;
use Auth;

class BanController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    
    public function show(){ 
    	$ban = Ban::all();

    	return view('pages/frontend/ban/ban', compact('ban'));
    }

    function input()
    {
    	return  view('pages/cms/ban/baninput');
    }

    function edit($id)
    {
    	$ban=Ban::where('id','=',$id)->first();

    	return  view('pages/cms/ban/banedit')
    	->with('ban_data',$ban);
    }

    public function showcms(){ 
    	$ban = Ban::all();
         $no = 1;

    	return view('pages/cms/ban/ban', compact('ban','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
          $validatedData = $request->validate([

                'nama_ban' => 'required|unique:master_ban',
            ]);

    	$ban = new Ban;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$ban->nama_ban = $request->nama_ban; 
            $ban->created_by = session()->get('session_name'); 
    	// untuk mengsave
    	$ban->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/ban');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([
                'nama_ban' => 'required|unique:master_ban',
            ]);
        
    	$ban = Ban::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $ban->nama_ban = $request->nama_ban; 
            $ban->updated_by = session()->get('session_name'); 
    	// untuk mengsave
    	$ban->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/ban');
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$ban = Ban::find($id);
    	$ban->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/ban');
    } 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Ban;
use App\Http\Model\Category_product;
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
    	$ban = Ban::getBan();

    	return view('pages/frontend/ban/ban', compact('ban'));
    }

    function input()
    {

        $category_product = Category_product::all();

    	return  view('pages/cms/ban/baninput', compact('category_product'));
    }

    function edit($id)
    {
        $category_product = Category_product::all();
    	$ban_data=Ban::where('id','=',$id)->first();

        return  view('pages/cms/ban/banedit', compact('category_product','ban_data'));
    }

    public function showcms(){ 
    	$ban = Ban::getBan();
         $no = 1;

    	return view('pages/cms/ban/ban', compact('ban','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
          $validatedData = $request->validate([

                'nama_ban' => 'required|unique:master_ban',
                'id_category' => 'required',
            ]);

    	$ban = new Ban;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$ban->nama_ban = $request->nama_ban; 
            $ban->id_category = $request->id_category; 
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
                'nama_ban' => 'required',
                'id_category' => 'required',
            ]);
        
    	$ban = Ban::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $ban->nama_ban = $request->nama_ban; 
            $ban->id_category = $request->id_category; 
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

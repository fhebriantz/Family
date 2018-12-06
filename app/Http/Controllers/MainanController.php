<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Mainan;
use App\Http\Model\Category_product;
use vendor\autoload;
use Illuminate\Routing\Middleware\LoginCheck;
use Auth;

class MainanController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    
    public function show(){ 
        $mainan = Mainan::getMainan();

        return view('pages/frontend/mainan/mainan', compact('mainan'));
    }

    function input()
    {
        $category_product = Category_product::all();

        return  view('pages/cms/mainan/mainaninput', compact('category_product'));
    }

    function edit($id)
    {
        $category_product = Category_product::all();
        $mainan_data=Mainan::where('id','=',$id)->first();

        return  view('pages/cms/mainan/mainanedit', compact('category_product','mainan_data'));
    }

    public function showcms(){ 
        $mainan = Mainan::getMainan();
         $no = 1;

        return view('pages/cms/mainan/mainan', compact('mainan','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
          $validatedData = $request->validate([

                'nama_mainan' => 'required|unique:master_mainan',
                'id_category' => 'required',
                
            ]);

        $mainan = new Mainan;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $mainan->nama_mainan = $request->nama_mainan; 
            $mainan->id_category = $request->id_category; 
            $mainan->created_by = session()->get('session_name'); 
        // untuk mengsave
        $mainan->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('cms/mainan');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([
                'nama_mainan' => 'required',
                'id_category' => 'required',
            ]);
        
        $mainan = Mainan::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $mainan->nama_mainan = $request->nama_mainan; 
            $mainan->id_category = $request->id_category; 
            $mainan->updated_by = session()->get('session_name'); 
        // untuk mengsave
        $mainan->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('cms/mainan');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $mainan = Mainan::find($id);
        $mainan->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('cms/mainan');
    } 
}

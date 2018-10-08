<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Mainan;
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
        $mainan = Mainan::all();

        return view('pages/frontend/mainan/mainan', compact('mainan'));
    }

    function input()
    {
        return  view('pages/cms/mainan/mainaninput');
    }

    function edit($id)
    {
        $mainan=Mainan::where('id','=',$id)->first();

        return  view('pages/cms/mainan/mainanedit')
        ->with('mainan_data',$mainan);
    }

    public function showcms(){ 
        $mainan = Mainan::all();
         $no = 1;

        return view('pages/cms/mainan/mainan', compact('mainan','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
          $validatedData = $request->validate([

                'nama_mainan' => 'required|unique:master_mainan',
            ]);

        $mainan = new Mainan;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $mainan->nama_mainan = $request->nama_mainan; 
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
                'nama_mainan' => 'required|unique:master_mainan',
            ]);
        
        $mainan = Mainan::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $mainan->nama_mainan = $request->nama_mainan; 
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

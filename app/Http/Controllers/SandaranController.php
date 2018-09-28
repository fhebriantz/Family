<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Sandaran;
use Auth;

class SandaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(){ 
        $sandaran = Sandaran::all();

        return view('pages/frontend/sandaran/sandaran', compact('sandaran'));
    }

    function input()
    {
        return  view('pages/cms/sandaran/sandaraninput');
    }

    function edit($id)
    {
        $sandaran=Sandaran::where('id','=',$id)->first();

        return  view('pages/cms/sandaran/sandaranedit')
        ->with('sandaran_data',$sandaran);
    }

    public function showcms(){ 
        $sandaran = Sandaran::all();
         $no = 1;

        return view('pages/cms/sandaran/sandaran', compact('sandaran','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
          $validatedData = $request->validate([

                'nama_sandaran' => 'required|unique:master_sandaran',
            ]);

        $sandaran = new Sandaran;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $sandaran->nama_sandaran = $request->nama_sandaran; 
            $sandaran->created_by = Auth::user()->name; 
        // untuk mengsave
        $sandaran->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('cms/sandaran');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([
                'nama_sandaran' => 'required|unique:master_sandaran',
            ]);
        
        $sandaran = Sandaran::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $sandaran->nama_sandaran = $request->nama_sandaran; 
            $sandaran->updated_by = Auth::user()->name; 
        // untuk mengsave
        $sandaran->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('cms/sandaran');
    }

    public function delete($id){
        // find khusus untuk primary key di database
        $sandaran = Sandaran::find($id);
        $sandaran->delete();

        // sama aja kaya href setelak klik delete
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('cms/sandaran');
    } 
}

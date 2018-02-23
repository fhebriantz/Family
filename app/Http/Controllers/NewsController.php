<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use Auth;
use App\Http\Model\News;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){ 
    	$news = News::all();

    	return view('pages/frontend/news/news', compact('news'));
    }


	function input()
    {
    	return  view('pages/cms/news/newsinput');
    }

    function edit($id)
    {
    	$news=News::where('id','=',$id)->first();
    	return  view('pages/cms/news/newsedit')
    	->with('news_data',$news);
    }

    function view($id)
    {
        $news=News::where('id','=',$id)->first();

        return  view('pages/cms/news/newsview')
        ->with('news_data',$news);
    }

    public function showcms(){ 
    	$news = News::all();
        $no = 1;

    	return view('pages/cms/news/news', compact('news','no'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'title' => 'required',
                'desc' => 'required|min:50',
            ]);

    	$news = new News;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$news->title = $request->title; 
    		$news->desc = $request->desc;
            $news->created_by = Auth::user()->name; 
    	// untuk mengsave
    	$news->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/news');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([
                'title' => 'required',
                'desc' => 'required|min:50',
            ]);
        
    	$news = News::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$news->title = $request->title; 
    		$news->desc = $request->desc;
            $news->updated_by = Auth::user()->name;
    	// untuk mengsave
    	$news->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/news');
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$news = News::find($id);
    	$news->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/news');
    } 

}

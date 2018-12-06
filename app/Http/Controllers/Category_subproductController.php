<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Category_subproduct;
use App\Http\Model\Category_product;
use App\Http\Model\Mainan;
use App\Http\Model\Ban;
use Illuminate\Routing\Middleware\LoginCheck;
use vendor\autoload;
use Response;
use Illuminate\Support\Facades\Input;
use Auth;

class Category_subproductController extends Controller
{

    public function __construct()
    {
        $this->middleware('logincheck');
    }

    public function show(){ 
    	$category_subproduct = Category_subproduct::all();

    	return view('pages/frontend/cat_subproduct/subproduct', compact('category_subproduct'));
    }

    public function tes(){ 

        $category_product=Category_product::all();

        return view('pages/dashboard/index', compact('category_product'));
    }


    public function mainan_ajax(){ 

        $cat_id = Input::get('cat_id');
        $subcategories = Mainan::where('id_category','=',$cat_id)->get();
        return Response::json($subcategories);
    }

    public function ban_ajax(){ 

        $cat_id = Input::get('cat_id');
        $ban = Ban::where('id_category','=',$cat_id)->get();
        return Response::json($ban);
    }

    //  public function show(){ 
    // 	$category_subproduct = Category_subproduct::all();
    // 	$category_product = Category_product::all();

    // 	return view('frontend/subproduct', compact('category_subproduct','category_product'));
    // }

    public function showcms(){ 
    	$category_subproduct = Category_subproduct::getTableSub();
        $no = 1;

    	return view('pages/cms/cat_subproduct/subproduct', compact('category_subproduct','no'));
    }

    function input()
    {
    	$category_product = Category_product::all();
        $no = 1;
        
    	return  view('pages/cms/cat_subproduct/subproductinput', compact('category_product','no'));
    }

    function edit($id)
    {
    	$category_subproduct=Category_subproduct::getTableSub()->where('id','=',$id)->first();
    	$category_product=Category_product::all();
        $no = 1;

    	return view('pages/cms/cat_subproduct/subproductedit', compact('category_subproduct','category_product','no'));
    }

    function view($id)
    {
        $category_subproduct=Category_subproduct::getTableSub()->where('id','=',$id)->first();
        $category_product=Category_product::all();

        return view('pages/cms/cat_subproduct/subproductview', compact('category_subproduct'), compact('category_product'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
        $validatedData = $request->validate([
            'id_category' => 'required',
            'category_subproduct_name' => 'required',
        ]);

    	$category_subproduct = new Category_subproduct;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$category_subproduct->id = $request->id;
    		$category_subproduct->id_category = $request->id_category;
    		$category_subproduct->category_subproduct_name = $request->category_subproduct_name;
            $category_subproduct->created_by = session()->get('session_name'); 
    	// untuk mengsave
    	$category_subproduct->save();
    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product/subproduct');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
         $validatedData = $request->validate([
            'id_category' => 'required',
            'category_subproduct_name' => 'required',
        ]);

    	$category_subproduct = Category_subproduct::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$category_subproduct->id = $request->id;
    		$category_subproduct->id_category = $request->id_category; 
    		$category_subproduct->category_subproduct_name = $request->category_subproduct_name;
            $category_subproduct->updated_by = session()->get('session_name');

    	// untuk mengsave
    	$category_subproduct->save();
    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product/subproduct');
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$category_subproduct = Category_subproduct::find($id);
    	$category_subproduct->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product/subproduct');
    } 
}

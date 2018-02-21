<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Category_product;
use Auth;

class Category_productController extends Controller
{
    public function show(){ 
    	$category_product = Category_product::all();

    	return view('pages/frontend/cat_product/product', compact('category_product'));
    }

    public function showcms(){ 
    	$category_product = Category_product::all();
        $no = 1;

    	return view('pages/cms/cat_product/product', compact('category_product','no'));
    }

    function input()
    {
    	return  view('pages/cms/cat_product/productinput');
    }

    function edit($id)
    {
    	$category_product=Category_product::where('id','=',$id)->first();

    	return  view('pages/cms/cat_product/productedit')
    	->with('product_data',$category_product);
    }

    function view($id)
    {
        $category_product=Category_product::where('id','=',$id)->first();

        return  view('pages/cms/cat_product/productview')
        ->with('product_data',$category_product);
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
    	$category_product = new Category_product;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$category_product->id = $request->id; 
    		$category_product->category_product_name = $request->category_product_name;
            $category_product->created_by = Auth::user()->name; 
    	// untuk mengsave
    	$category_product->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
    	$category_product = Category_product::find($id);

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$category_product->id = $request->id; 
    		$category_product->category_product_name = $request->category_product_name;
            $category_product->updated_by = Auth::user()->name; 
    	// untuk mengsave
    	$category_product->save();

    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product');
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$category_product = Category_product::find($id);
    	$category_product->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product');
    } 
}

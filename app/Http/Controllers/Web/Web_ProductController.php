<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Product_detail;
use App\Http\Model\Category_subproduct;
use App\Http\Model\Category_product;

class Web_ProductController extends Controller
{
    public function show(){  
    	$product_detail = Product_detail::getTableDetailweb();
    	$tricycle = Category_subproduct::all();
        $catpro = Category_product::all();
    	return view('pages/web/product/product', compact('product_detail','tricycle','catpro'));
    }

    function view($id)
    {
        $product_detail = Product_detail::getTableDetail()->where('id','=',$id)->first();
        return view('pages/web/product/productdetail', compact('product_detail'));
    }
    // Sub List ============== Sub List ============ Sub List ============ Sub List
    function show_list_category_prod($id)
    {
        $product_detail = Product_detail::getTableDetailsub($id);
        $tricycle = Category_subproduct::all();
        $catpro = Category_product::all();
        return view('pages/web/product/product', compact('product_detail','tricycle','catpro'));
    }
    // Main List ============= Main List =========== Main List ============= Main List
    function show_list_main_prod($id)
    {
        $product_detail = Product_detail::getTableDetailmain($id);
        $tricycle = Category_subproduct::all();
        $catpro = Category_product::all();
        return view('pages/web/product/product', compact('product_detail','tricycle','catpro'));
    }

}

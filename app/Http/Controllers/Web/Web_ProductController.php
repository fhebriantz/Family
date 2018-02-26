<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Product_detail;

class Web_ProductController extends Controller
{
    public function show(){  
    	$product_detail = Product_detail::getTableDetail();
    	return view('pages/web/product/product', compact('product_detail'));
    }

    function view($id)
    {
        $product_detail = Product_detail::getTableDetail()->where('id','=',$id)->first();
        return view('pages/web/product/productdetail', compact('product_detail'));
    }

}

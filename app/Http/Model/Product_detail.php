<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product_detail extends Model
{
    protected $table = 'product_details';

    	public static function getTableDetail(){
    	$product_details = DB::table('product_details')
            ->join('category_products', 'category_products.id', '=', 'product_details.id_category')
            ->join('category_subproducts', 'category_subproducts.id', '=', 'product_details.id_category_sub')
            ->select('product_details.*', 'category_products.category_product_name', 'category_products.id as id_catpro', 'category_subproducts.category_subproduct_name',  'category_subproducts.id as id_catsub')
            ->get();

	     return $product_details;
	    }
}

<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category_subproduct extends Model
{
    public $table = 'category_subproducts';
    // Defining a non-static method in a Foo class.
   	public static function getTableSub(){
    	$category_subproducts = DB::table('category_subproducts')
            ->join('category_products', 'category_products.id', '=', 'category_subproducts.id_category')
            ->select('category_subproducts.*', 'category_products.category_product_name', 'category_products.id as id_catpro')
            ->get();

     return $category_subproducts;
    }

}

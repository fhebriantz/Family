<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product_detail extends Model
{
    protected $table = 'product_details';
    // CMS ==========================
    public static function getTableDetail(){
    	$product_details = DB::table('product_details')
            ->join('category_products', 'category_products.id', '=', 'product_details.id_category')
            ->join('category_subproducts', 'category_subproducts.id', '=', 'product_details.id_category_sub')
            ->select('product_details.*', 'category_products.category_product_name', 'category_products.id as id_catpro', 'category_subproducts.category_subproduct_name',  'category_subproducts.id as id_catsub')
            ->get();

	     return $product_details;
	    }




	// WEB ============================
    public static function getTableDetailweb(){
    	$product_details = DB::table('product_details')
            ->join('category_products', 'category_products.id', '=', 'product_details.id_category')
            ->join('category_subproducts', 'category_subproducts.id', '=', 'product_details.id_category_sub')
            ->select('product_details.*', 'category_products.category_product_name', 'category_products.id as id_catpro', 'category_subproducts.category_subproduct_name',  'category_subproducts.id as id_catsub')
            ->paginate(8);

	     return $product_details;
	    }  

        public static function getTableFilter(){
        $product_details = DB::table('product_details')
            ->join('category_products', 'category_products.id', '=', 'product_details.id_category')
            ->join('category_subproducts', 'category_subproducts.id', '=', 'product_details.id_category_sub')
            ->select('product_details.*', 'category_products.category_product_name', 'category_products.id as id_catpro', 'category_subproducts.category_subproduct_name',  'category_subproducts.id as id_catsub');

         return $product_details;
        }    

	public static function getTableDetailsub($id){
    	$product_details = DB::table('product_details')
            ->join('category_products', 'category_products.id', '=', 'product_details.id_category')
            ->join('category_subproducts', 'category_subproducts.id', '=', 'product_details.id_category_sub')
            ->select('product_details.*', 'category_products.category_product_name', 'category_products.id as id_catpro', 'category_subproducts.category_subproduct_name',  'category_subproducts.id as id_catsub')
            ->where('id_category_sub','=',$id)
            ->paginate(8);

	     return $product_details;
	    }

	public static function getTableDetailmain($id){
    	$product_details = DB::table('product_details')
            ->select('*')
            ->where('id_category','=',$id)
            ->paginate(8);

	     return $product_details;
	    }

    // public static function getTablecat($id){
    //     $category_products = DB::table('category_products')
    //         ->join('product_details.id_category', '=', 'category_products', 'category_products.id')
    //         ->select('*')
    //         ->where('id','=',$id)
    //         ->get();

    //      return $category_products;
    //     }
}

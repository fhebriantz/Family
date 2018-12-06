<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mainan extends Model
{
    protected $table = 'master_mainan';


   	public static function getMainan(){
    	$master_mainan = DB::table('master_mainan')
            ->join('category_products', 'category_products.id', '=', 'master_mainan.id_category')
            ->select('master_mainan.*', 'category_products.category_product_name', 'category_products.id as id_catpro')
            ->get();

     return $master_mainan;
    }
}

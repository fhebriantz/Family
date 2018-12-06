<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Ban extends Model
{
    protected $table = 'master_ban';

    public static function getBan(){
    	$master_ban = DB::table('master_ban')
            ->join('category_products', 'category_products.id', '=', 'master_ban.id_category')
            ->select('master_ban.*', 'category_products.category_product_name', 'category_products.id as id_catpro')
            ->get();

     return $master_ban;
    }
}

<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';

    public function GetTableAbout(){
    	$users = DB::table('epro_user')
            ->join('epro_user_group', 'epro_user_group.id as ab', '=', 'epro_user.id_user_group')
            ->select('epro_user.*', 'epro_user_group.definisi')
            ->get();

    return $users;
    }

     public function GetAll(){
    	$users = DB::table('epro_user')
            ->select('epro_user.*')
            // '*'
            ->get();

    return $users;
    }

    public function GetProductt($id){
    	$users = DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.id_category_product')
            ->join('category_subproduct', 'category_subproduct.id', '=', 'product.id_category_subproduct')
            ->select('product.*', 'category_product.nama_produk','category_subproduct.nama_subproduk')
            ->where('product.id','=',$id)
            ->get();

    return $users;
    }

    public function getTableSubEdit($id){
        $users = DB::table('product')
            ->join('category_product', 'category_product.id_category', '=', 'product.id_category_product')
            ->select('product.*', 'category_product.nama_produk','category_subproduct.nama_subproduk')
            ->where('product.id','=',$id)
            ->get();

    return $users;
    }
}

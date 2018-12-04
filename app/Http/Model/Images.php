<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Images extends Model
{
    protected $table = 'images';

    public function Slider(){
    	$images = DB::table('images')
            ->select('images.*')
            ->where('images.created_by','=','Admin')
            ->get();

    return $images;
    }
}

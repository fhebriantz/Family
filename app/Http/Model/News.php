<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class News extends Model
{
    protected $table = 'news';

    public static function getNews(){
    	$news = DB::table('news')
            ->select('*')
            ->paginate(8);

	     return $news;
	    }
}

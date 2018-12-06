<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Eloquent
{
    protected $fillable = ['category_subproduct_name','id_category'];
}
<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Product_detail;
use App\Http\Model\Category_subproduct;
use App\Http\Model\Category_product;
use App\Http\Model\Mainan;
use Session;

use App\Http\Model\Sandaran;
use App\Http\Model\Ban;
use vendor\autoload;
use App;

class Web_ProductController extends Controller
{
  
    function view($id)
    {
        App::setLocale(session()->get('lang'));
        $product_detail = Product_detail::getTableDetail()->where('id','=',$id)->first();
        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        return view('pages/web/product/productdetail', compact('product_detail','catpro','mainan','sandaran','ban'));
    }

    public function show(){  
        App::setLocale(session()->get('lang'));
        $product_detail = Product_detail::getTableDetailweb();
        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        return view('pages/web/product/product', compact('product_detail','catpro','mainan','sandaran','ban'));
    }

    public function show_list_category_prod($id){
        App::setLocale(session()->get('lang'));
        $product_detail = Product_detail::getTableDetailsub($id);
        $tricycle = Category_subproduct::all();
        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        return view('pages/web/product/product', compact('product_detail','tricycle','catpro','mainan','sandaran','ban'));
    }
    // Main List ============= Main List =========== Main List ============= Main List
    public function show_list_main_prod($id){
        App::setLocale(session()->get('lang'));
        $product_detail = Product_detail::getTableDetailmain($id);
        $tricycle = Category_subproduct::all();
        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        // $cat = Category_product::getTablecat($id);
        return view('pages/web/product/product', compact('product_detail','tricycle','catpro','mainan','sandaran','ban'));
    }

    public function filter(Request $request){
        App::setLocale(session()->get('lang'));

        $r_category = $request->category; 
        $r_mainan = $request->mainan; 
        $r_ban = $request->ban; 
        $r_sandaran = $request->sandaran; 

        if ($r_category) {
            $name_category = Category_product::all()->where('id','=',$r_category)->first();
            $name_cat = $name_category->category_product_name;
            Session::flash('flash_category', $name_cat);
        }
        // mainan 
        if ($r_category == null || $r_category == "") {
            if ($r_mainan == null || $r_mainan == "") {
                if ($r_ban == null || $r_ban == "") {
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_sandaran','=',$r_sandaran)
                        ->paginate(1000);
                    }
                }else{
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_ban','=',$r_ban)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_sandaran','=',$r_sandaran)
                        ->where('id_ban','=',$r_ban)
                        ->paginate(1000);
                    }
                }
            }
            // ban
            elseif ($r_ban == null || $r_ban == "") {
                if ($r_mainan == null || $r_mainan == "") {
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_sandaran','=',$r_sandaran)
                        ->paginate(1000);
                    }
                }else{
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_sandaran','=',$r_sandaran)
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }
                }
            }
            // sandaran
            elseif ($r_sandaran == null || $r_sandaran == "") {
                if ($r_mainan == null || $r_mainan == "") {
                    if ($r_ban == null || $r_ban == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_ban','=',$r_ban)
                        ->paginate(1000);
                    }
                }else{
                    if ($r_ban == null || $r_ban == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_ban','=',$r_ban)
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }
                }
            }
            else{
                $product_detail = Product_detail::getTableFilter()
                ->where('id_mainan','=',$r_mainan)
                ->where('id_sandaran','=',$r_sandaran)
                ->where('id_ban','=',$r_ban)
                ->paginate(1000);
            }
        }else{
            if ($r_mainan == null || $r_mainan == "") {
                if ($r_ban == null || $r_ban == "") {
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_sandaran','=',$r_sandaran)
                        ->where('product_details.id_category','=',$r_category)
                        ->paginate(1000);
                    }
                }else{
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_ban','=',$r_ban)
                        ->where('product_details.id_category','=',$r_category)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('id_sandaran','=',$r_sandaran)
                        ->where('id_ban','=',$r_ban)
                        ->where('product_details.id_category','=',$r_category)
                        ->paginate(1000);
                    }
                }
            }
            // ban
            elseif ($r_ban == null || $r_ban == "") {
                if ($r_mainan == null || $r_mainan == "") {
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->where('id_sandaran','=',$r_sandaran)
                        ->paginate(1000);
                    }
                }else{
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->where('id_sandaran','=',$r_sandaran)
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }
                }
            }
            // sandaran
            elseif ($r_sandaran == null || $r_sandaran == "") {
                if ($r_mainan == null || $r_mainan == "") {
                    if ($r_ban == null || $r_ban == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->where('id_ban','=',$r_ban)
                        ->paginate(1000);
                    }
                }else{
                    if ($r_ban == null || $r_ban == "") {
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }else{
                        $product_detail = Product_detail::getTableFilter()
                        ->where('product_details.id_category','=',$r_category)
                        ->where('id_ban','=',$r_ban)
                        ->where('id_mainan','=',$r_mainan)
                        ->paginate(1000);
                    }
                }
            }
            else{
                $product_detail = Product_detail::getTableFilter()
                ->where('product_details.id_category','=',$r_category)
                ->where('id_mainan','=',$r_mainan)
                ->where('id_sandaran','=',$r_sandaran)
                ->where('id_ban','=',$r_ban)
                ->paginate(1000);
            }
        }
        

        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        return view('pages/web/product/product', compact('product_detail','catpro','mainan','sandaran','ban'));
    }

}

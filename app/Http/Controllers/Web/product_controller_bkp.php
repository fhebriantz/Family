

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
        $product_head = Product_detail::getTableDetailweb()->first();
        $catpro = Category_product::all();
        $subcat = null;
        $cat = null;
        $allcat = "1";
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        return view('pages/web/product/product', compact('subcat','cat','allcat','product_detail','product_head','catpro','mainan','sandaran','ban'));
    }

    public function show_list_category_prod($id){
        App::setLocale(session()->get('lang'));
        $product_detail = Product_detail::getTableDetailsub($id);
        $tricycle = Category_subproduct::all();
        $subcat = Category_subproduct::getTableSub()->where('id','=',$id)->first();
        $cat = null;
        $allcat = null;
        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        return view('pages/web/product/product', compact('subcat','cat','allcat','product_detail','product_head','tricycle','catpro','mainan','sandaran','ban'));
    }
    // Main List ============= Main List =========== Main List ============= Main List
    public function show_list_main_prod($id){
        App::setLocale(session()->get('lang'));
        $product_detail = Product_detail::getTableDetailmain($id);
        $product_head = Product_detail::getTableDetailweb($id)->first();
        $tricycle = Category_subproduct::all();
        $cat = Category_product::all()->where('id','=',$id)->first();
        $subcat = null;
        $allcat = null;
        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        // $cat = Category_product::getTablecat($id);
        return view('pages/web/product/product', compact('subcat','cat','allcat','product_detail','product_head','tricycle','catpro','mainan','sandaran','ban'));
    }

    public function filter(Request $request){
        App::setLocale(session()->get('lang'));

        $r_category = $request->category; 
        $r_mainan = $request->mainan; 
        $r_ban = $request->ban; 
        $r_sandaran = $request->sandaran; 
        $r_sortby = $request->sortby; 
        

        $catpro = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        $cat = null;
        $subcat = null;
        $allcat = null;
        $request->session()->forget('flash_category');
        $request->session()->forget('flash_mainan');
        $request->session()->forget('flash_ban');
        $request->session()->forget('flash_sandaran');

        if ($r_category != null || $r_category != "" ) {
            $name_category = Category_product::all()->where('id','=',$r_category)->first();
            $name_cat = $name_category->category_product_name;
            Session::flash('flash_category', $name_cat);
        }
        if ($r_mainan != null || $r_mainan != "" ) {
            $name_mainan = Mainan::all()->where('id','=',$r_mainan)->first();
            $name_main = $name_mainan->nama_mainan;
            Session::flash('flash_mainan', $name_main);
        }

        if ($r_ban != null || $r_ban != "" ) {
            $name_ban = Ban::all()->where('id','=',$r_ban)->first();
            $name_ba = $name_ban->nama_ban;
            Session::flash('flash_ban', $name_ba);
        }

        if ($r_sandaran != null || $r_sandaran != "" ) {
            $name_sandaran = Sandaran::all()->where('id','=',$r_sandaran)->first();
            $name_san = $name_sandaran->nama_sandaran;
            Session::flash('flash_sandaran', $name_san);
        }

        // mainan 
        if ($r_category == null || $r_category == "") {
            if ($r_mainan == null || $r_mainan == "") {
                if ($r_ban == null || $r_ban == "") {
                    if ($r_sandaran == null || $r_sandaran == "") {
                        $product_detail = Product_detail::getTableDetailweb();
                        return view('pages/web/product/product', compact('subcat','cat','allcat','product_detail','product_head','catpro','mainan','sandaran','ban'));
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
        
        return view('pages/web/product/product', compact('subcat','cat','allcat','product_detail','catpro','mainan','sandaran','ban'));
    }

}

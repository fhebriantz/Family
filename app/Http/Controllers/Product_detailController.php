<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Product_detail;
use App\Http\Model\Category_subproduct;
use App\Http\Model\Category_product;
use Illuminate\Routing\Middleware\LoginCheck;
use App\Http\Model\Mainan;
use App\Http\Model\Sandaran;
use App\Http\Model\Ban;
use App\file;
use Illuminate\Support\Facades\Input;
use Auth;
use DateTime;
use Response;
use Date;
use Carbon;
use vendor\autoload;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class Product_detailController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('logincheck');
    }


    public function show(){ 
    	$product_detail = Product_detail::all();

    	return view('pages/frontend/detail_product/detail', compact('product_detail'));
    }

     public function showcms(){ 
     	$product_detail = Product_detail::getTableDetail();
        $is_hide = Product_detail::getTableDetail()->first();
        $no = 1;	

    	return view('pages/cms/detail_product/detail', compact('product_detail','no','is_hide'));
    }

    public function show_price(){
        $show=Product_detail::getTableDetail();
        //->where('created_by','=',session()->get('session_id'));
        if (count($show) >0) {
            foreach($show as $on){
                $change_show = Product_detail::where('id','=',$on->id)->first();
                $change_show->hide_price = 0;
                $change_show->save();
            }
        }
        else{ }
        return  Redirect::back();
    }
    public function hide_price(){
        $hide=Product_detail::getTableDetail();
        //->where('created_by','=',session()->get('session_id'));
        if (count($hide) >0) {
            foreach($hide as $off){
                $change_hide = Product_detail::where('id','=',$off->id)->first();
                $change_hide->hide_price = 1;
                $change_hide->save();
            }
        }
        else{ }
        return  Redirect::back();
    }

    function input()
    {
    	$category_subproduct = Category_subproduct::getTableSub();
        $category_product = Category_product::all();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        $no = 1;
        $nos = 1;
    	return  view('pages/cms/detail_product/detailinput', compact('category_product','category_subproduct','no','nos','mainan','sandaran','ban'));
    }

    function edit($id)
    {
    	$product_detail=Product_detail::where('id','=',$id)->first();
        $category_product=Category_product::all();
        $category_subproduct=Category_subproduct::getTableSub();
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        $no = 1;
        $nos = 1;
    	return view('pages/cms/detail_product/detailedit', compact('product_detail','category_product','category_subproduct','no','nos','mainan','sandaran','ban'));
    }

    function view($id)
    {
        $product_detail=Product_detail::getTableDetail()->where('id','=',$id)->first();
        
        $mainan = Mainan::all();
        $sandaran = Sandaran::all();
        $ban = Ban::all();
        return view('pages/cms/detail_product/detailview', compact('product_detail','mainan','sandaran','ban'));
    }

    // menampilkan fungsi input
    function insert (Request $request)  
    {
 
         $validatedData = $request->validate([
            'id_category' => 'required',
            'id_category_sub' => 'required',
            'name_product' => 'required',
            'image1' => 'required',
            'hide_price' => 'required',

        ]);

    	$product_detail = new Product_detail;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$product_detail->id = $request->id;
            $product_detail->id_category = $request->id_category;
            $product_detail->id_category_sub = $request->id_category_sub;
            $product_detail->name_product = $request->name_product;
            $product_detail->price = $request->price; 
            $product_detail->hide_price = $request->hide_price; 
            $product_detail->id_sandaran = $request->id_sandaran; 
            $product_detail->id_mainan = $request->id_mainan; 
            $product_detail->id_ban = $request->id_ban; 
            $product_detail->description = $request->description;
            // Gambar 1 =============================================
             if($request->file('image1') == "" || $request->file('image1') == null)
            {
                $product_detail->image1 = $product_detail->image1;
            } 
             else
            {
                $this->validate($request, [
                    'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file1      = $request->file('image1');
                $fileName1   = time().'a'.'.'.$file1->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file1->move($destinationPath, $fileName1);
                $product_detail->image1 = $fileName1;
            }

            // Gambar 2 =============================================
             if($request->file('image2') == "" || $request->file('image2') == null)
            {
                $product_detail->image2 = $product_detail->image2;
            } 
             else
            {
                $this->validate($request, [
                    'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file2      = $request->file('image2');
                $fileName2   = time().'b'.'.'.$file2->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file2->move($destinationPath, $fileName2);
                $product_detail->image2 = $fileName2;
            }

            // Gambar 3 =============================================
             if($request->file('image3') == "" || $request->file('image3') == null)
            {
                $product_detail->image3 = $product_detail->image3;
            } 
             else
            {
                $this->validate($request, [
                    'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file3      = $request->file('image3');
                $fileName3   = time().'c'.'.'.$file3->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file3->move($destinationPath, $fileName3);
                $product_detail->image3 = $fileName3;
            }

            // Gambar 4 =============================================
             if($request->file('image4') == "" || $request->file('image4') == null)
            {
                $product_detail->image4 = $product_detail->image4;
            } 
             else
            {
                $this->validate($request, [
                    'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file4      = $request->file('image4');
                $fileName4   = time().'d'.'.'.$file4->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file4->move($destinationPath, $fileName4);
                $product_detail->image4 = $fileName4;
            }

            // Gambar 5 =============================================
             if($request->file('image5') == "" || $request->file('image5') == null)
            {
                $product_detail->image5 = $product_detail->image5;
            } 
             else
            {
                $this->validate($request, [
                    'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file5      = $request->file('image5');
                $fileName5   = time().'e'.'.'.$file5->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file5->move($destinationPath, $fileName5);
                $product_detail->image5 = $fileName5;
            }
            
            $product_detail->created_by = session()->get('session_name'); 

    	// untuk mengsave
    	$product_detail->save();
    	// sama aja kaya href setelak klik submit
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product/subproduct/detail');
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([
            'id_category' => 'required',
            'id_category_sub' => 'required',
            'name_product' => 'required',
            'image1' => 'required',
            'hide_price' => 'required',
        ]);

        //check which submit was clicked on
        if(Input::get('submit')) 
        {
            $product_detail = Product_detail::find($id);
            $product_detail->id = $request->id;
            $product_detail->id_category = $request->id_category;
            $product_detail->id_category_sub = $request->id_category_sub;
            $product_detail->price = $request->price;
            $product_detail->id_sandaran = $request->id_sandaran; 
            $product_detail->id_mainan = $request->id_mainan; 
            $product_detail->hide_price = $request->hide_price; 
            $product_detail->id_ban = $request->id_ban; 
            $product_detail->name_product = $request->name_product;
            $product_detail->description = $request->description;

            // Gambar 1 =============================================
            if($request->file('image1') == "" || $request->file('image1') == null)
            {
                $product_detail->image1 = $product_detail->image1;
            } 
             else
            {
                $this->validate($request, [
                    'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file1      = $request->file('image1');
                $fileName1   = time().'a'.'.'.$file1->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file1->move($destinationPath, $fileName1);
                $product_detail->image1 = $fileName1;
            }

            // Gambar 2 =============================================
            if($request->file('image2') == "" || $request->file('image2') == null)
            {
                $product_detail->image2 = $product_detail->image2;
            } 
             else
            {
                $this->validate($request, [
                    'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file2      = $request->file('image2');
                $fileName2   = time().'b'.'.'.$file2->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file2->move($destinationPath, $fileName2);
                $product_detail->image2 = $fileName2;
            }

            // Gambar 3 =============================================
            if($request->file('image3') == "" || $request->file('image3') == null)
            {
                $product_detail->image3 = $product_detail->image3;
            } 
             else
            {
                $this->validate($request, [
                    'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file3      = $request->file('image3');
                $fileName3   = time().'c'.'.'.$file3->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file3->move($destinationPath, $fileName3);
                $product_detail->image3 = $fileName3;
            }

            // Gambar 4 =============================================
            if($request->file('image4') == "" || $request->file('image4') == null)
            {
                $product_detail->image4 = $product_detail->image4;
            } 
             else
            {
                $this->validate($request, [
                    'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file4      = $request->file('image4');
                $fileName4   = time().'d'.'.'.$file4->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file4->move($destinationPath, $fileName4);
                $product_detail->image4 = $fileName4;
            }

            // Gambar 5 =============================================
            if($request->file('image5') == "" || $request->file('image5') == null)
            {
                $product_detail->image5 = $product_detail->image5;
            } 
             else
            {
                $this->validate($request, [
                    'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $file5      = $request->file('image5');
                $fileName5   = time().'e'.'.'.$file5->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file5->move($destinationPath, $fileName5);
                $product_detail->image5 = $fileName5;
            }



            $product_detail->updated_by = session()->get('session_name'); 
            // untuk mengsave
            $product_detail->save();
            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            return  redirect('cms/product/subproduct/detail');
        } 


        elseif(Input::get('delete1')) 
        {
            $product_detail = Product_detail::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $product_detail->id = $product_detail->id;
            $product_detail->id_category = $product_detail->id_category;
            $product_detail->id_category_sub = $product_detail->id_category_sub;
            $product_detail->name_product = $product_detail->name_product;
            $product_detail->price = $product_detail->price; 

            $nol="";
            $product_detail->image1 = $nol;

            $product_detail->image2 = $product_detail->image2;

            $product_detail->image3 = $product_detail->image3;
           
            $product_detail->image4 = $product_detail->image4;
            
            $product_detail->image5 = $product_detail->image5;
           
            $product_detail->updated_by = session()->get('session_name'); 
            // untuk mengsave
            $product_detail->save();
            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            //$message = 'Succses';
            // status yang di panggil di blade, success adalah pesannya
            $request->session()->flash('status1', 'Picture "Image1" has been deleted');
            return  Redirect::back();
        }

        elseif(Input::get('delete2')) 
        {
            $product_detail = Product_detail::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $product_detail->id = $product_detail->id;
            $product_detail->id_category = $product_detail->id_category;
            $product_detail->id_category_sub = $product_detail->id_category_sub;
            $product_detail->name_product = $product_detail->name_product;
            $product_detail->price = $product_detail->price; 
            
            $nol="";
            $product_detail->image1 = $product_detail->image1;

            $product_detail->image2 = $nol;

            $product_detail->image3 = $product_detail->image3;
           
            $product_detail->image4 = $product_detail->image4;
            
            $product_detail->image5 = $product_detail->image5;
           
            $product_detail->updated_by = session()->get('session_name'); 
            // untuk mengsave
            $product_detail->save();
            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            $request->session()->flash('status2', 'Picture "Image2" has been deleted');
            return  Redirect::back();
        }

        elseif(Input::get('delete3')) 
        {
            $product_detail = Product_detail::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $product_detail->id = $product_detail->id;
            $product_detail->id_category = $product_detail->id_category;
            $product_detail->id_category_sub = $product_detail->id_category_sub;
            $product_detail->name_product = $product_detail->name_product;
            $product_detail->price = $product_detail->price; 

            $nol="";
            $product_detail->image1 = $product_detail->image1;

            $product_detail->image2 = $product_detail->image2;

            $product_detail->image3 = $nol;
           
            $product_detail->image4 = $product_detail->image4;
            
            $product_detail->image5 = $product_detail->image5;
           
            $product_detail->updated_by = session()->get('session_name'); 
            // untuk mengsave
            $product_detail->save();
            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            $request->session()->flash('status3', 'Picture "Image3" has been deleted');
            return  Redirect::back();
        }

        elseif(Input::get('delete4')) 
        {
            $product_detail = Product_detail::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $product_detail->id = $product_detail->id;
            $product_detail->id_category = $product_detail->id_category;
            $product_detail->id_category_sub = $product_detail->id_category_sub;
            $product_detail->name_product = $product_detail->name_product;
            $product_detail->price = $product_detail->price; 

            $nol="";
            $product_detail->image1 = $product_detail->image1;

            $product_detail->image2 = $product_detail->image2;

            $product_detail->image3 = $product_detail->image3;
           
            $product_detail->image4 = $nol;
            
            $product_detail->image5 = $product_detail->image5;
           
            $product_detail->updated_by = session()->get('session_name'); 
            // untuk mengsave
            $product_detail->save();
            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            $request->session()->flash('status4', 'Picture "Image4" has been deleted');
            return  Redirect::back();
        }

        elseif(Input::get('delete5')) 
        {
            $product_detail = Product_detail::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $product_detail->id = $product_detail->id;
            $product_detail->id_category = $product_detail->id_category;
            $product_detail->id_category_sub = $product_detail->id_category_sub;
            $product_detail->name_product = $product_detail->name_product;
            $product_detail->price = $product_detail->price; 

            $nol=NULL;
            $product_detail->image1 = $product_detail->image1;

            $product_detail->image2 = $product_detail->image2;

            $product_detail->image3 = $product_detail->image3;
           
            $product_detail->image4 = $product_detail->image4;
            
            $product_detail->image5 = $nol;
            // test 1
           
            $product_detail->updated_by = session()->get('session_name'); 
            // untuk mengsave
            $product_detail->save();
            // sama aja kaya href setelak klik submit
            // mau pindah ke link mana setelah tombol submit di klik
            $request->session()->flash('status5', 'Picture "Image5" has been deleted');
            return  Redirect::back();
        }
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$product_detail = Product_detail::find($id);
    	$product_detail->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/product/subproduct/detail');
    } 

}

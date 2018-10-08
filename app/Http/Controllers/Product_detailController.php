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
        $no = 1;	

    	return view('pages/cms/detail_product/detail', compact('product_detail','no'));
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
            'name_product' => 'required|unique:product_details',
            'price' => 'required|numeric',
            'id_sandaran' => 'required',
            'id_mainan' => 'required',
            'id_ban' => 'required',
            'id' => 'required',
            'description' => 'required',
            'image1' => 'required',
        ]);

    	$product_detail = new Product_detail;

    		// nama = nama field di database, var_nama = var_nama di dalam form input_blade
    		$product_detail->id = $request->id;
            $product_detail->id_category = $request->id_category;
            $product_detail->id_category_sub = $request->id_category_sub;
            $product_detail->name_product = $request->name_product;
            $product_detail->price = $request->price; 
            $product_detail->id_sandaran = $request->id_sandaran; 
            $product_detail->id_mainan = $request->id_mainan; 
            $product_detail->id_ban = $request->id_ban; 
            $product_detail->description = $request->description;
            // Gambar 1 =============================================
            if($request->file('image1') == "")
            {
                $product_detail->image1 = $product_detail->image1;
            } 
             else
            {
            $file1       = $request->file('image1');
            $fileName1   = $file1->getClientOriginalName();
            $request->file('image1')->move("C:/xampp/htdocs/family/public/asset/img", $fileName1);
            $product_detail->image1 = $fileName1;
            }

            // Gambar 2 =============================================
            if($request->file('image2') == "")
            {
                $product_detail->image2 = $product_detail->image2;
            } 
             else
            {
            $file2       = $request->file('image2');
            $fileName2   = $file2->getClientOriginalName();
            $request->file('image2')->move("C:/xampp/htdocs/family/public/asset/img", $fileName2);
            $product_detail->image2 = $fileName2;
            }

            // Gambar 3 =============================================
            if($request->file('image3') == "")
            {
                $product_detail->image3 = $product_detail->image3;
            } 
             else
            {
            $file3       = $request->file('image3');
            $fileName3   = $file3->getClientOriginalName();
            $request->file('image3')->move("C:/xampp/htdocs/family/public/asset/img", $fileName3);
            $product_detail->image3 = $fileName3;
            }

            // Gambar 4 =============================================
            if($request->file('image4') == "")
            {
                $product_detail->image4 = $product_detail->image4;
            } 
             else
            {
            $file4       = $request->file('image4');
            $fileName4   = $file4->getClientOriginalName();
            $request->file('image4')->move("C:/xampp/htdocs/family/public/asset/img", $fileName4);
            $product_detail->image4 = $fileName4;
            }

            // Gambar 5 =============================================
            if($request->file('image5') == "")
            {
                $product_detail->image5 = $product_detail->image5;
            } 
             else
            {
            $file5       = $request->file('image5');
            $fileName5   = $file5->getClientOriginalName();
            $request->file('image5')->move("C:/xampp/htdocs/family/public/asset/img", $fileName5);
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
            'id_sandaran' => 'required',
            'id_mainan' => 'required',
            'id_ban' => 'required',
            'name_product' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image1' => 'required',
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
                $fileName1   = time().'.'.$file1->getClientOriginalExtension();
                $destinationPath = public_path('/asset/img');
                $file1->move($destinationPath, $fileName1);
                $product_detail->image1 = $fileName1;
            }

            // Gambar 2 =============================================
            if($request->file('image2') == "")
            {
                $product_detail->image2 = $product_detail->image2;
            } 
             else
            {
            $file2       = $request->file('image2');
            $fileName2   = $file2->getClientOriginalName();
            $request->file('image2')->move("C:/xampp/htdocs/family/public/asset/img", $fileName2);
            $product_detail->image2 = $fileName2;
            }

            // Gambar 3 =============================================
            if($request->file('image3') == "")
            {
                $product_detail->image3 = $product_detail->image3;
            } 
             else
            {
            $file3       = $request->file('image3');
            $fileName3   = $file3->getClientOriginalName();
            $request->file('image3')->move("C:/xampp/htdocs/family/public/asset/img", $fileName3);
            $product_detail->image3 = $fileName3;
            }

            // Gambar 4 =============================================
            if($request->file('image4') == "")
            {
                $product_detail->image4 = $product_detail->image4;
            } 
             else
            {
            $file4       = $request->file('image4');
            $fileName4   = $file4->getClientOriginalName();
            $request->file('image4')->move("C:/xampp/htdocs/family/public/asset/img", $fileName4);
            $product_detail->image4 = $fileName4;
            }

            // Gambar 5 =============================================
            if($request->file('image5') == "")
            {
                $product_detail->image5 = $product_detail->image5;
            } 
             else
            {
            $file5       = $request->file('image5');
            $fileName5   = $file5->getClientOriginalName();
            $request->file('image5')->move("C:/xampp/htdocs/family/public/asset/img", $fileName5);
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
            $product_detail->frame = $product_detail->frame;
            $product_detail->fork = $product_detail->fork;
            $product_detail->brakes_rear = $product_detail->brakes_rear;
            $product_detail->brakes_levers = $product_detail->brakes_levers;
            $product_detail->pedals = $product_detail->pedals;
            $product_detail->crankset = $product_detail->crankset;
            $product_detail->bottom_bracket = $product_detail->bottom_bracket;
            $product_detail->chain = $product_detail->chain;
            $product_detail->cassete = $product_detail->cassete;
            $product_detail->rim = $product_detail->rim;
            $product_detail->saddle = $product_detail->saddle;
            $product_detail->seatpot = $product_detail->seatpot;
            $product_detail->stem = $product_detail->stem;
            $product_detail->handlebar = $product_detail->handlebar;

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
            $product_detail->frame = $product_detail->frame;
            $product_detail->fork = $product_detail->fork;
            $product_detail->brakes_rear = $product_detail->brakes_rear;
            $product_detail->brakes_levers = $product_detail->brakes_levers;
            $product_detail->pedals = $product_detail->pedals;
            $product_detail->crankset = $product_detail->crankset;
            $product_detail->bottom_bracket = $product_detail->bottom_bracket;
            $product_detail->chain = $product_detail->chain;
            $product_detail->cassete = $product_detail->cassete;
            $product_detail->rim = $product_detail->rim;
            $product_detail->saddle = $product_detail->saddle;
            $product_detail->seatpot = $product_detail->seatpot;
            $product_detail->stem = $product_detail->stem;
            $product_detail->handlebar = $product_detail->handlebar;

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
            $product_detail->frame = $product_detail->frame;
            $product_detail->fork = $product_detail->fork;
            $product_detail->brakes_rear = $product_detail->brakes_rear;
            $product_detail->brakes_levers = $product_detail->brakes_levers;
            $product_detail->pedals = $product_detail->pedals;
            $product_detail->crankset = $product_detail->crankset;
            $product_detail->bottom_bracket = $product_detail->bottom_bracket;
            $product_detail->chain = $product_detail->chain;
            $product_detail->cassete = $product_detail->cassete;
            $product_detail->rim = $product_detail->rim;
            $product_detail->saddle = $product_detail->saddle;
            $product_detail->seatpot = $product_detail->seatpot;
            $product_detail->stem = $product_detail->stem;
            $product_detail->handlebar = $product_detail->handlebar;

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
            $product_detail->frame = $product_detail->frame;
            $product_detail->fork = $product_detail->fork;
            $product_detail->brakes_rear = $product_detail->brakes_rear;
            $product_detail->brakes_levers = $product_detail->brakes_levers;
            $product_detail->pedals = $product_detail->pedals;
            $product_detail->crankset = $product_detail->crankset;
            $product_detail->bottom_bracket = $product_detail->bottom_bracket;
            $product_detail->chain = $product_detail->chain;
            $product_detail->cassete = $product_detail->cassete;
            $product_detail->rim = $product_detail->rim;
            $product_detail->saddle = $product_detail->saddle;
            $product_detail->seatpot = $product_detail->seatpot;
            $product_detail->stem = $product_detail->stem;
            $product_detail->handlebar = $product_detail->handlebar;

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
            $product_detail->frame = $product_detail->frame;
            $product_detail->fork = $product_detail->fork;
            $product_detail->brakes_rear = $product_detail->brakes_rear;
            $product_detail->brakes_levers = $product_detail->brakes_levers;
            $product_detail->pedals = $product_detail->pedals;
            $product_detail->crankset = $product_detail->crankset;
            $product_detail->bottom_bracket = $product_detail->bottom_bracket;
            $product_detail->chain = $product_detail->chain;
            $product_detail->cassete = $product_detail->cassete;
            $product_detail->rim = $product_detail->rim;
            $product_detail->saddle = $product_detail->saddle;
            $product_detail->seatpot = $product_detail->seatpot;
            $product_detail->stem = $product_detail->stem;
            $product_detail->handlebar = $product_detail->handlebar;

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

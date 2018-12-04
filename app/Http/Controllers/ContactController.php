<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use App\Http\Model\Contact;
use Illuminate\Routing\Middleware\LoginCheck;
use vendor\autoload;
use Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }

    function edit($id)
    {
        $contact=Contact::where('id','=',$id)->first();

        return  view('pages/cms/contact/contactedit')
        ->with('contact_data',$contact);
    }


    public function showcms(){ 
        $contact = Contact::all();
         $no = 1;

        return view('pages/cms/contact/contact', compact('contact','no'));
    }

    // menampilkan fungsi edit
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'title' => 'required',
                'desc' => 'required',
            ]);
        
        $contact = Contact::find($id);

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $contact->title = $request->title; 
            $contact->desc = $request->desc;
            $contact->updated_by = session()->get('session_name'); 
        // untuk mengsave
        $contact->save();

        // sama aja kaya href setelak klik submit
        // mau pindah ke link mana setelah tombol submit di klik
        return  redirect('cms/contact');
    }
}

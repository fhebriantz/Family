<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Question;
use Illuminate\Support\Facades\Input;
use vendor\autoload;
use Illuminate\Support\Facades\Redirect;
use App;

class Web_QuestionController extends Controller
{
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'email' => 'required',
                'question' => 'required|min:50',
            ]);

        $questions = new Question;

            // nama = nama field di database, var_nama = var_nama di dalam form input_blade
            $questions->email = $request->email; 
            $questions->question = $request->question;
        // untuk mengsave
        $questions->save();
        $request->session()->flash('berhasil', 'The question is send!');
        return  Redirect::back();
    }
}

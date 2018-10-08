<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// untuk menyingkat materi gak usah pake APP
use Illuminate\Routing\Middleware\LoginCheck;
use App\Http\Model\Question;
use vendor\autoload;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    } 
    
    public function show(){ 
    	$question = Question::all();
        $no = 1;

    	return view('pages/cms/question/question', compact('question','no'));
    }

    public function delete($id){
    	// find khusus untuk primary key di database
    	$question = Question::find($id);
    	$question->delete();

    	// sama aja kaya href setelak klik delete
    	// mau pindah ke link mana setelah tombol submit di klik
    	return  redirect('cms/question');
    } 
}

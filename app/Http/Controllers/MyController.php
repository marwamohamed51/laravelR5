<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function my_data()
    {
        return view('carvilla');
    }

    public function formResult(Request $request){
        $fname = $request->fname;
        $lanme = $request->lname;
        return view('formResult', compact('fname', 'lanme'));
    }
}

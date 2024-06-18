<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactClient;

class MyController extends Controller
{
    public function my_data()
    {
        return view('carvilla');
    }

    public function formResult(Request $request)
    {
        $fname = $request->fname;
        $lanme = $request->lname;
        return view('formResult', compact('fname', 'lanme'));
    }

    public function mySession()
    {
        // session()->put('test', 'First Laravel Session');
        session()->flash('test1', 'First Laravel Session');
        return "this is my first laravel session :))";
    }
    public function restoreSession()
    {
        return "My session value is : " . session('test1');
    }
    public function deleteSession()
    {
        session()->forget('test');
        return "session removed successfully";
    }
    public function sendClientMail()
    {
        $data = Client::findOrFail(2)->toArray();
        // dd($data);
        $data['theMessage'] = 'my message: please check your information again.';
        Mail::to($data['email'])->send(
            new ContactClient($data)
        );
        return "mail sent successfully!";
    }

 
}

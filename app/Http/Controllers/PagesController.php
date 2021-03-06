<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class PagesController extends Controller
{
    //
    public function home(){
        $messages = Messages::where('id','<','50')->paginate(10);

        return view('welcome', ['messages' => $messages,]);
    }
    public function about(){
        return view('acerca');
    }
}

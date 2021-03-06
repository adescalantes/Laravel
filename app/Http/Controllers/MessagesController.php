<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Messages $messages){
       

        return view('messages.show', ['messages'=> $messages,]);
    }

    public function create(CreateMessageRequest $request){
        $message = Messages::create([
            'content' => $request->input('message'),
            'image' => 'http://lorempixel.com/600/338?'.mt_rand(0,1000)
        ]);
        return redirect('/messages/'.$message->id);
    }
}

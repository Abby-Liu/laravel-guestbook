<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
            $messages = Message::all();
        	   return view('messages.index', [
                 'messages' => $messages,
            ]);
    }

    public function store(Request $request)
    {
        $request->user()->messages()->create([
            'body' => $request->body,
        ]);

        // $message = new Message;
        // $message->body = $request->body;
        // $message->save();
        return redirect('messages');
    }

    public function destroy(Request $request, Message $message)
    {
       $message->delete();
       return redirect('/messages');
    }

    public function show(Message $message)
    {
        $name = $message->user()->first()->name;
        return view('messages.show', [
            'message' => $message,
            'name' => $name
        ]);
    }

    public function edit(Message $message)
    {
        return view('messages.edit', [
            'message' => $message
        ]);
    }

    public function update(Request $request, Message $message)
    {
        $message->update([
            'body' => $request->body
        ]);
        return redirect('/messages');
    }


    //
}

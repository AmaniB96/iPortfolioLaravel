<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('partials.messages.back.list', compact('messages'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('backHome.index')->with('success', 'Message deleted!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSend;

class MessagesController extends Controller
{
    public function index($chatId)
    {
        $results = Message::where('chat_id', $chatId)->get();

        return response()->json($results);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $message = Message::create($data);

        MessageSend::dispatch($message->chat_id);

        return response()->json($message);
    }
}

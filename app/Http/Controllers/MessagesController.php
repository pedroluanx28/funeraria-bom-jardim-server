<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSend;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function index($chatId)
    {
        $results = Message::where('chat_id', $chatId)->orderBy('created_at')->get();

        return response()->json($results);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        return DB::transaction(function () use ($data) {
            $message = Message::create($data);

            MessageSend::dispatch($message->chat_id);

            return response()->json($message);
        });
    }
}

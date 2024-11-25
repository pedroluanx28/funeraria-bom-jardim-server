<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineFuneral;
use App\Http\Requests\OnlineFuneralRequest;

class OnlineFuneralController extends Controller
{
    public function index()
    {
        $results = OnlineFuneral::get();

        return response()->json($results);
    }

    public function store(OnlineFuneralRequest $request)
    {
        $data = $request->validated();

        $result = OnlineFuneral::create($data);

        return response()->json($result);
    }

    public function show($id)
    {
        $result = OnlineFuneral::find($id);

        $result->load('chat');

        return response()->json($result);
    }

    public function update(OnlineFuneralRequest $request, $id)
    {
        $data = $request->validated();

        $result = OnlineFuneral::find($id);
        $result->update($data);

        return response()->json($result->fresh());
    }

    public function changeStatus($id)
    {
        $result = OnlineFuneral::find($id);

        $result->update([
            'is_active' => !$result->is_active
        ]);

        return response()->json($result->fresh());
    }

    public function enterInRoom()
    {
        $result = OnlineFuneral::where('room_password', request()->input('room_password'))->first();

        if (!$result) {
            return response()->json(['message' => 'Sala não encontrada'], 422);
        }

        return response()->json($result);
    }
}

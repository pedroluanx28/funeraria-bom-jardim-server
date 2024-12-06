<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineFuneral;
use App\Http\Requests\OnlineFuneralRequest;
use Carbon\Carbon;

class OnlineFuneralController extends Controller
{
    public function index()
    {
        $results = OnlineFuneral::with(['deceasedLogs', 'currentDeceasedLog'])->get();

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

        $result->load(['chat', 'currentDeceasedLog']);

        if ($result->currentDeceasedLog === null) {
            throw new \Exception('A sala não está ativa.');
        }

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

    public function addOperatingPeriod(Request $request, $id)
    {
        $data = $request->all();

        $result = OnlineFuneral::find($id);

        $result->update([
            'start_date' => Carbon::parse($data['start_date'])->startOfDay(),
            'end_date' => Carbon::parse($data['end_date'])->endOfDay(),
            'deceased_name' => $data['deceased_name']
        ]);

        $result->deceasedLogs()->create([
            'start_date' => $result->start_date,
            'end_date' => $result->end_date,
            'deceased_name' => $result->deceased_name
        ]);

        return response()->json($result->fresh());
    }
}

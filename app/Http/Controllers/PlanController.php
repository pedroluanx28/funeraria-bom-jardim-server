<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
        $data = Plan::orderBy('id', 'asc')->with('benefits')->get();

        return $data;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $plan = Plan::create([
            'name' => $data['name'],
            'joining' => $data['joining'],
            'monthly_fee' => $data['monthly_fee'],
            'shortage' => $data['shortage'],
            'coverage' => $data['coverage'],
        ]);

        return $plan;
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $result = Plan::find($id);
        $result->update($data);

        return response()->json($result->fresh());
    }
}

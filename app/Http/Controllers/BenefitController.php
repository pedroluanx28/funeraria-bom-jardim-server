<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index($id)
    {
        $data = Benefit::where('plan_id', $id)->orderBy('id', 'asc')->get();

        return $data;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $benefit = Benefit::create($data);

        return $benefit;
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $result = Benefit::find($id);
        $result->update($data);

        return response()->json($result->fresh());
    }

    public function delete($id)
    {
        $result = Benefit::find($id);
        $result->delete();

        return response()->json(['message' => 'Benefit deleted successfully']);
    }
}

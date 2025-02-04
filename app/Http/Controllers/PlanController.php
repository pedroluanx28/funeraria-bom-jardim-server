<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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
        $file = isset($data['image']) ? $data['image'] : null;
        $imageName = null;

        if ($file) {
            if (!$file->isValid()) {
                return response()->json(['error' => 'O arquivo precisa ser uma imagem válida.'], 400);
            }

            $uploadFile = Cloudinary::upload($file->getRealPath(), [
                'folder' => 'images'
            ]);

            $imageName = $uploadFile->getSecurePath();
        }

        $plan = Plan::create([
            'name' => $data['name'],
            'joining' => $data['joining'],
            'monthly_fee' => $data['monthly_fee'],
            'shortage' => $data['shortage'],
            'coverage' => $data['coverage'],
            'image' => $imageName,
        ]);

        return $plan;
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $file = isset($data['image']) ? $data['image'] : null;
        $imageName = null;

        if ($file) {
            if (!$file->isValid()) {
                return response()->json(['error' => 'O arquivo precisa ser uma imagem válida.'], 400);
            }

            $uploadFile = Cloudinary::upload($file->getRealPath(), [
                'folder' => 'images'
            ]);

            $imageName = $uploadFile->getSecurePath();
        }

        $data['image'] = $imageName;

        $result = Plan::find($id);
        $result->update($data);

        return response()->json($result->fresh());
    }

    public function delete($id)
    {
        $result = Plan::find($id);
        $result->delete();

        return response()->json(['success' => 'Plano deletado com sucesso.']);
    }
}

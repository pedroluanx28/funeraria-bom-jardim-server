<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configurations = Configuration::whereNotNull('name')->get();

        return response()->json($configurations);
    }

    public function saveImageOrText(Request $request)
    {
        $data = $request->all();

        $fields = $data['fields'];

        foreach ($fields as $field) {
            $file = isset($field['file']) ? $field['file'] : null;
            $file_type_id = isset($field['file_type_id']) ? $field['file_type_id'] : null;
            $description = isset($field['description']) ? $field['description'] : null;

            $configuration = Configuration::where('id', $file_type_id)->first();

            if ($file) {
                if (!$file->isValid()) {
                    return response()->json(['error' => 'O arquivo precisa ser uma imagem válida.'], 400);
                }

                $file_extension = $file->getClientOriginalExtension();
                $imageName = md5($file->getClientOriginalName() . strtotime('now')) . '.' . $file_extension;

                $file->move(public_path('images'), $imageName);

                if ($configuration) {
                    $configuration->update([
                        'name' => $imageName,
                    ]);
                }
            }

            if ($configuration && $description !== null) {
                $configuration->update([
                    'name' => $description,
                ]);
            }
        }

        return response()->json(['success' => 'Alterações salvas com sucesso.'], 200);
    }

    public function deleteImageOrText(string $file_type_id)
    {
        $configuration = Configuration::where('id', $file_type_id)->first();

        if ($configuration) {
            $configuration->update([
                'name' => null,
            ]);
        }

        return response()->json(['success' => 'Alterações salvas com sucesso.'], 200);
    }
}

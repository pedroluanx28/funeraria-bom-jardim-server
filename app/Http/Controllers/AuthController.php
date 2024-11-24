<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        $data = request()->all();

        $user = User::where('identifier', $data['identifier'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return response()->json(['message' => 'Credenciais inválidas'], 422);
        }

        $user->tokens()->delete();

        $token = $user->createToken($data['identifier'])->plainTextToken;

        return response()->json(['token' => $token]);
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OnlineFuneralRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'room_name' => 'required|string',
            'cam_link' => 'required|string',
            'room_password' => [
                'required',
                'string',
                Rule::unique('online_funerals', 'room_password')->ignore($this->route('id'))
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'room_name.required' => 'O nome da sala é obrigatório.',
            'cam_link.required' => 'O link da câmera é obrigatório.',
            'room_password.required' => 'A senha da sala é obrigatória.',
            'room_password.unique' => 'A senha da sala deve ser única.',
        ];
    }
}

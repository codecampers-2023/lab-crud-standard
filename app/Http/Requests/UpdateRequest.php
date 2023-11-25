<?php

namespace App\Http\Requests;

use GuzzleHttp\Pool;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool{
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array<string, \Illuminate\contracts\validation\ValidationRule|array<mixed>|string>
     */

    public function rules():array {
        return [
            'name' => 'requird | max:40',
            'projectId' => 'required',
            'description' => 'required',
        ];
    }
}
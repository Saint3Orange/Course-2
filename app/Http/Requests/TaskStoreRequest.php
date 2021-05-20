<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:1|max:256',
            'description' => 'required|string|min:1|max:256',
            'user_id' => 'required|exists:users,user_id'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        dd($validator->errors());
    }
}

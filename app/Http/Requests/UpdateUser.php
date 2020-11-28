<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
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
            'name'      => ['required', 'max:100'],
            'last_name' => ['required', 'max:100'],
            'username'  => ['required', 'max:30', Rule::unique('users')->ignore($this->userId)],
            'password'  => ['nullable'],
            'role_id'   => ['required', 'exists:roles,id']
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOvertime extends FormRequest
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
            'employee' => ['required', 'exists:users,id'],
            'start_date' => ['required', 'date'],
            'finish_date' => ['required', 'date'],
            'start_time' => ['required'],
            'finish_time' => ['required'],
            'overtime_desc' => ['required', 'max:255']
        ];
    }
}

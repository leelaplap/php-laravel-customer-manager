<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityVadidateRequest extends FormRequest
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
            'name' => "required|max:100000"
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>'Không được để trống',
            "name.max" =>"quá dài"
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerValidateRequest extends FormRequest
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
            'name' => 'required|min:3|max:10',
            'dob' => 'required',
            'email' => 'required|unique:users,email',
            'city_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Tên không được để trống',
            'name.min' =>'Tên không được ít hơn 3 kí tự',
            'name.max' =>'Tên không được nhiều hơn 10 kí tự',
            'dob.required' =>'Ngày sinh không được để trống',
            'email.required' =>'Email không được để trống',
            'email.unique' =>'Email đã bị trùng',
            'city_id.required' =>'Thành phố không được để trống',
        ];
    }
}

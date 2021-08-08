<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'min:2|max:50',
            'phone' => '|min:9',
            'password' => 'min:1',
        ];
    }

    public function messages()
    {
        $message = [
            'name.min' => 'Tên chỉ được phép dài 2-50 ký tự',
            'name.max' => 'Tên chỉ được phép dài 2-50 ký tự',
            'phone.min' => 'Số điện thoại chỉ được phép dài 9-12 ký tự',

            'password.min' => 'Mật khẩu chỉ được phép dài hơn 8 ký tự',
        ];
        return $message;
    }
}

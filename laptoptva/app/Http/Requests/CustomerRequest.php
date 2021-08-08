<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'customer_name' => 'min:2|max:50',
            'customer_phone' => '|min:9',
            'address' => 'min:2',
        ];
    }

    public function messages()
    {
        $message = [
            'customer_name.min' => 'Tên chỉ được phép dài 2-50 ký tự',
            'customer_name.max' => 'Tên chỉ được phép dài 2-50 ký tự',
            'customer_phone.min' => 'Số điện thoại chỉ được phép dài 9-12 ký tự',
            'address.min' => 'Bắt buộc phải có địa chỉ trên 2 ký tự',
        ];
        return $message;
    }
}

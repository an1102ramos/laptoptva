<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSupplierRequest extends FormRequest
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
            'name' => 'min:2|max:30',
            'address' => 'min:5|max:80',


        ];
    }
//'phone' => 'numeric|min:1=2|max:15',
    public function messages()
    {
        $message = [
            'name.min' => 'Name size must be between 2 and 30!',
            'name.max' => 'Name size must be between 2 and 30!',
            'address.min' => 'address size must be between 5 and 80!',
            'address.max' => 'address size must be between 5 and 80!',
            'phone.numeric' => 'Phone under validation must be numeric',
            'phone.min' => 'Phone size must be between 9 and 11!',
            'phone.max' => 'Phone size must be between 9 and 11!',
        ];
        return  $message;
    }
}

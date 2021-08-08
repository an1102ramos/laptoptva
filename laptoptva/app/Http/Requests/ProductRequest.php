<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'prd_image' => 'mimes:jpeg,jpg,png,gif|max:10000', // max 10000kb
            'prd_name' => 'min:2|max:100',
            'prd_cpu' => 'min:2|max:100',
            'prd_ram' => 'min:2|max:100',
            'prd_hard_drive' => 'min:2|max:100',
            'prd_screen' => 'min:2|max:100',
            'prd_vga' => 'min:2|max:100',
            'prd_service_tag' => 'min:2|max:100',
            'prd_instock' => 'numeric|min:1|max:10000000',
            'prd_sell_quantity' => 'numeric|min:0|max:10000000',
            'prd_price' => 'numeric|min:1',
            'prd_retail_price' => 'numeric|min:1',
            'prd_description' => 'min:2|max:500',
        ];
    }
     public function messages()
     {
         $message = [
             'prd_name.min' => 'Tên sản phẩm chỉ được phép dài từ 2-100 ký tự',
             'prd_name.max' => 'Tên sản phẩm chỉ được phép dài từ 2-100 ký tự',
             'prd_cpu.min' => 'Tên CPU chỉ được phép dài từ 2-100 ký tự',
             'prd_cpu.max' => 'Tên CPU chỉ được phép dài từ 2-100 ký tự',
             'prd_ram.min' => 'Tên RAM chỉ được phép dài từ 2-100 ký tự',
             'prd_ram.max' => 'Tên RAM chỉ được phép dài từ 2-100 ký tự',
             'prd_hard_drive.min' => 'Tên ổ cứng chỉ được phép dài từ 2-100 ký tự',
             'prd_hard_drive.max' => 'Tên ổ cứng chỉ được phép dài từ 2-100 ký tự',
             'prd_screen.min' => 'Tên màn hình chỉ được phép dài từ 2-100 ký tự',
             'prd_screen.max' => 'Tên màn hình chỉ được phép dài từ 2-100 ký tự',
             'prd_vga.min' => 'Tên VGA chỉ được phép dài từ 2-100 ký tự',
             'prd_vga.max' => 'Tên VGA chỉ được phép dài từ 2-100 ký tự',
             'prd_service_tag.min' => 'Service tag chỉ được phép dài từ 2-100 ký tự',
             'prd_service_tag.max' => 'Service tag chỉ được phép dài từ 2-100 ký tự',
             'prd_instock.numeric' => 'Hàng tồn kho phải là số',
             'prd_price.numeric' => 'Giá gốc phải là số',
             'prd_retail_price.numeric' => 'Giá bán phải là số',
             'prd_sell_quantity.numeric' => 'Hàng đã bán phải là số',
             'prd_description.max' => 'Ghi chú quá dài',
             'prd_image.mimes' => 'Nhập cái file gì thế có phải ảnh đâu',
             'prd_image.max' => 'Dung lượng quá lớn!',

         ];
         return $message;
     }
}

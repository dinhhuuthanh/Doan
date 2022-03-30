<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProducFormRequest extends FormRequest
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
        $formRules = [
            "name" => [
                "required",
                Rule::unique('products')->ignore($this->id),
            ],
            "file_upload" => [
                "mimes:jpg,bmp,png"
            ],
            "price" => [
                "numeric",
                "min:0"
            ],
            "quantity" => [
                "numeric",
                "min:0"
            ],
            "description" => [
                "required"
            ]
        ];
        if ($this->id == null) {
            $formRules['file_upload'][] = "required";
        }
        return $formRules;
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => "Không được để trống tên",
    //         'name.unique' => "Tên đã tồn tại",
    //         'file_upload.required' => "Không để trống ảnh ",
    //         'file_upload.mimes:jpg,bmp,png' => "Định dạng hình ảnh không chính xác (jpg,bmp,pnj)",
    //         'price.numeric' => "Vui lòng nhập số",
    //         'price.min' => "Vui lòng nhập giá >=0",
    //         'sale.numeric' => "Vui lòng nhập số",
    //         'sale.min' => "Vui lòng nhập giá >=0",
    //         'quantity.numeric' => "Vui lòng nhập số",
    //         'quantity.min' => "Vui lòng nhập số lượng >=0",
    //         'description.required' => "Không bỏ trống mô tả sản phẩm"
    //     ];
    // }
}

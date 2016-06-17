<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ThemHangRequest extends Request
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
            'sltParent' => 'required',
            'pro_name' => 'required',
            'pro_code' => 'required|unique:product,pro_code',
            'pro_price' => 'required',
            'pro_images' => 'required'
        ];
    }
    public function messages(){
        return [
            'sltParent.required' => 'Bạn vui lòng chọn danh mục.',
            'pro_name.required' => 'Bạn vui lòng nhập tên.',
            'pro_code.required' => 'Bạn vui lòng nhập code.',
            'pro_price.required' => 'Bạn vui lòng nhập giá.',
            'pro_images.required' => 'Bạn vui lòng nhập hình.',
            'pro_code.unique' => 'Mã không được trùng.',
        ];
    }
}

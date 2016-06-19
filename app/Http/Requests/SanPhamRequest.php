<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SanPhamRequest extends Request
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
            'pro_name' => 'required',
            'pro_code' => 'required|unique:product,pro_code',
            'pro_price' => 'required|integer|min:0',
            'pro_color' => 'required',
            'pro_sizeS' => 'required|integer|min:0',
            'pro_sizeL' => 'required|integer|min:0',
            'pro_sizeM' => 'required|integer|min:0'
        ];
    }
    public function messages()
    {
        return[
            'pro_name.required' => 'Bạn vui lòng nhập tên sản phẩm',
            'pro_code.required' => 'Bạn vui lòng nhập mã sản phẩm',
            'pro_price.required' => 'Bạn vui lòng nhập giá của sản phẩm',
            'pro_price.min' => 'Giá sản phẩm bạn nhập không được âm',
            'pro_sizeS.min' => 'Cỡ sản phẩm không được âm',
            'pro_sizeM.min' => 'Cỡ sản phẩm không được âm',
            'pro_sizeL.min' => 'Cỡ sản phẩm không được âm',
            'pro_code.unique' =>'Mã sản phẩm không được trùng',
            'pro_color.required' => 'Bạn vui lòng nhập màu sản phẩm',
            'pro_sizeS.required' => 'Bạn vui lòng nhập số lượng sizeS',
            'pro_sizeL.required' => 'Bạn vui lòng nhập số lượng sizeL',
            'pro_sizeM.required' => 'Bạn vui lòng nhập số lượng sizeM'
            ];
    }
}

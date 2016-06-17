<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TinTucRequest extends Request
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
            'new_name' => 'required',
            'new_images' => 'required',
            'new_detail' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'new_name.required' => 'Bạn vui lòng nhập tên tin tức',
            'new_images.required' => 'Bạn vui lòng tải ảnh lên',
            'new_detail.required' => 'Bạn vui lòng nhập nội dung'
            ];
    }
}

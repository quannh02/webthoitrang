<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DatHangRequest extends Request
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
            'namenguoigui' => 'required',
            'emailnguoigui' => 'required',
            'sdtnguoigui' => 'required|min:8|max:14',
            'addressnguoigui' => 'required',
            'namenguoinhan' => 'required',
            'sdtnguoinhan' => 'required', 
            'addressnguoinhan' => 'required'
        ];
    }
    public function messages(){
        return [
            'namenguoigui.required' => 'Vui lòng nhập tên người gửi.',
            'emailnguoigui.required' => 'Vui lòng nhập email người gửi.',
            'sdtnguoigui.required'=> 'Vui lòng nhập số điện thoại người gửi',
            'addressnguoigui.required' => 'Vui lòng nhập địa chỉ người gửi',
            'sdtnguoigui.min' => 'Số điện thoại phải lớn hơn 8 ký tự',
            'sdtnguoigui.max' => 'Số điện thoại phải nhỏ hơn 14 ký tự',
            'namenguoinhan.required'   => 'Vui lòng nhập tên người nhận',
            'sdtnguoinhan.required'   => 'Vui lòng nhập số điện thoại người nhận',
            'addressnguoinhan.required'   => 'Vui lòng nhập địa chỉ người nhận'
        ];
    }
}

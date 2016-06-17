<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NguoiDungRequest extends Request
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
            'username' => 'required',
            'role' => 'required',
            'email' => 'required'
        ];
    }
    public function messages(){
        return [
            'username.required' => 'Bạn vui lòng nhập tên người dùng',
            'role.required' => 'Bạn vui lòng nhập đối tượng người dùng',
            'email.required' => 'Bạn vui lòng nhập email người dùng'
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DangKyRequest extends Request
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
        'name.required' => 'Bạn vui lòng nhập tên đầy đủ',
        'email.required' => 'Bạn vui lòng nhập email',
        'email.unique' => 'Email đã được sử dụng',
        'password.required' => 'Bạn vui lòng nhập mật khẩu',
        'password_confirmation.required' => 'Bạn vui lòng nhập lại mật khẩu',
        'password_confirmation.same' => 'Mật khẩu của bạn không khớp'
        ];
    }
}

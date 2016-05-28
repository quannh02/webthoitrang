<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GioHangRequest extends Request
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
            'sizechose' => 'required'
        ];
    }

    public function messages(){
        return [
            'sizechose.required' => 'Bạn vui lòng chọn cỡ.'
        ];
    }
}

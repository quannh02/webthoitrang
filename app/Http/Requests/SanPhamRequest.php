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
            'pro_color' => 'required',
            'pro_sizeS' => 'required',
            'pro_sizeL' => 'required',
            'pro_sizeM' => 'required'
        ];
    }
    
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'txtTaiKhoan' => 'required',
            'txtMatKhau'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtTaiKhoan.required'      => 'Bạn chưa nhập tài khoản',
            'txtMatKhau.required'  => 'Bạn chưa nhập mật khẩu'
        ];
    }
}

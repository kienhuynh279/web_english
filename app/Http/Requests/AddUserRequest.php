<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'name'=>'unique:user,username',
            'email'=>'unique:user,email',  
            'password' => 'required|min:8',
            // |regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/
            'passwordAgain' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>' Tên người dùng đã tồn tại, vui lòng nhập một tên khác...',
            'email.unique'=>'Email đã tồn tại, vui lòng nhập một Email khác...',
            'password.min'=> 'Mật khẩu phải ít nhất 8 ký tự',
            // 'password.regex'=> 'Mật khẩu phải có 1 ký tự in hoa, theo bảng chữ cái , và có số',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
        ];        
    }
}

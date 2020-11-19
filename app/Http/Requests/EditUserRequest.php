<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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

            'name'=>'unique:user,username,'.$this->segment(4).',id',
            'email'=>'unique:user,email,'.$this->segment(4).',id',
            'password'=>'unique:user,password,'.$this->segment(4).',id',
            'password' => 'required|min:8',
            'passwordAgain' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên người dùng đã tồn tại, vui lòng nhập một tên khác...',
            'email.unique'=>'Email đã tồn tại, vui lòng nhập một Email khác...',
            'password.min'=> 'Mật khẩu phải ít nhất 8 ký tự',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
        ];        
    }
}

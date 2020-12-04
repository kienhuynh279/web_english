<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudent extends FormRequest
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
            'name'=>'unique:students,name',
            
        ];
    }
    public function messages()
    {
        return[
            'title.unique'=>' Tên Học Viên đã tồn tại, vui lòng nhập một tên khác hoặc thêm kí tự để phân biệt nếu giống tên',
        ];        
    }
}

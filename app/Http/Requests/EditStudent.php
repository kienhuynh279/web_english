<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditStudent extends FormRequest
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
            'name'=>'unique:students,name,'.$this->segment(4).',id',
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên học viên đã tồn tại, vui lòng nhập một tên khác...',
        ];        
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostCatsRequest extends FormRequest
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
            'title'=>'unique:thepost_cats,title,'.$this->segment(4).',id',
            'title_en'=>'unique:thepost_cats,title_en,'.$this->segment(4).',id',
            // 'meta_title'=>'unique:thepost_cats,meta_title,'.$this->segment(4).',id',
            // 'meta_description'=>'unique:thepost_cats,meta_description,'.$this->segment(4).',id',
            'slug'=>'unique:thepost_cats,slug,'.$this->segment(4).',id',
        ];
    }
    public function messages()
    {
        return[
            'title.unique'=>' Tên Danh Mục đã tồn tại, vui lòng nhập một tên khác...',
            'title_en.unique'=>'Tên Category English đã tồn tại, vui lòng nhập một tên Category English khác...',
            'slug.unique'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            // 'meta_title.unique'=>' Meta_title đã tồn tại, vui lòng nhập một meta khác...',
            // 'meta_description.unique'=>' Meta_description đã tồn tại, vui lòng nhập một meta khác...',
        ];        
    }
}

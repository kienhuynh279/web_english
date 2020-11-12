<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostsRequest extends FormRequest
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
            'img'=>'image',
            'title'=>'unique:theposts,title,'.$this->segment(4).',id',
            'title_en'=>'unique:theposts,title_en,'.$this->segment(4).',id',
            'meta_title'=>'unique:theposts,meta_title,'.$this->segment(4).',id',
            'meta_description'=>'unique:theposts,meta_description,'.$this->segment(4).',id',
            'slug'=>'unique:theposts,slug,'.$this->segment(4).',id',
        ];
    }
    public function messages()
    {
        return[
            'title.unique'=>' Tên Tài Liệu đã tồn tại, vui lòng nhập một tên khác...',
            'title_en.unique'=>'Tên Document English đã tồn tại, vui lòng nhập một tên  khác...',
            'slug.unique'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            'meta_title.unique'=>' Meta_title đã tồn tại, vui lòng nhập một meta khác...',
            'meta_description.unique'=>' Meta_description đã tồn tại, vui lòng nhập một meta khác...',
        ];        
    }
}

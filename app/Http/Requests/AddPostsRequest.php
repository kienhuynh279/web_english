<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostsRequest extends FormRequest
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
            'title'=>'unique:theposts,title',
            'title_en'=>'unique:theposts,title_en',  
            'slug'=>'unique:theposts,slug',  
            'meta_title'=>'unique:theposts,meta_title,',
            'meta_description'=>'unique:theposts,meta_description,',
            'img'=>'image',
        ];
    }
    public function messages()
    {
        return[
            'title.unique'=>' Tên Tài Liệu đã tồn tại, vui lòng nhập một tên khác...',
            'title_en.unique'=>'Tên Tài Liệu English đã tồn tại, vui lòng nhập một tên  khác...',
            'slug.unique'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            'meta_title.unique'=>' Meta_title đã tồn tại, vui lòng nhập một meta khác...',
            'meta_description.unique'=>' Meta_description đã tồn tại, vui lòng nhập một meta khác...',
        ];        
    }
}

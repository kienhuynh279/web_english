<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostCatsRequest extends FormRequest
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
            'title'=>'unique:thepost_cats,title',
            'title_en'=>'unique:thepost_cats,title_en',  
            'slug'=>'unique:thepost_cats,slug',  
            // 'meta_title'=>'unique:thepost_cats,meta_title,',
            // 'meta_description'=>'unique:thepost_cats,meta_description,',
        ];
    }
    public function messages()
    {
        return[
            'title.unique'=>' Tên Danh Mục đã tồn tại, vui lòng nhập một tên khác...',
            'title_en.unique'=>'Tên Danh Mục English đã tồn tại, vui lòng nhập một tên Danh Mục English khác...',
            'slug.unique'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            // 'meta_title.unique'=>' Meta_title đã tồn tại, vui lòng nhập một meta khác...',
            // 'meta_description.unique'=>' Meta_description đã tồn tại, vui lòng nhập một meta khác...',
        ];        
    }
}

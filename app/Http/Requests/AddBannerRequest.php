<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBannerRequest extends FormRequest
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
            'title'=>'unique:banners,title',
            'title_en'=>'unique:banners,title_en',  
            'slug'=>'unique:banners,slug',  
            'meta_title'=>'unique:banners,meta_title,',
            'meta_description'=>'unique:banners,meta_description,',
        ];
    }

    public function messages()
    {
        return[
            'title.unique'=>' Tên Banner đã tồn tại, vui lòng nhập một tên khác...',
            'title_en.unique'=>'Tên Banner_English đã tồn tại, vui lòng nhập một tên Banner_English khác...',
            'slug.unique'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            'meta_title.unique'=>' Meta_title đã tồn tại, vui lòng nhập một meta khác...',
            'meta_description.unique'=>' Meta_description đã tồn tại, vui lòng nhập một meta khác...',
        ];        
    }
}

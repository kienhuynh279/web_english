<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogsRequest extends FormRequest
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
            'Title' => "required",
            'Cate_Id' => "required",
            'Avatar' => "required",
            'Summary'=> "required",
            'Content' => "required",
            'Checked' => "required",
            'Del_Flg' => "required",
            'Hight_Flg' => "required",
            'Status'=> "required",
            'Slug' => "required",
        ];
    }
}

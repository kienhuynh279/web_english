<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'theforms';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable =
    [
         'title',
         'title_en',
         'id_theforms_cat',
         'avatar',
         'summary',
         'summary_en',
         'content',
         'content_en',
         'meta_description',
         'meta_title',
         'checked',
         'del_flg',
         'hight_flg',
         'status',
         'created_at',
         'slug',
         'position',
         'rating',
         'discount'
    ];

    public function FormCateGory()
    {
        return $this->hasMany('App\Models\FormCategory', 'id_theforms_cat','id');
    }
}

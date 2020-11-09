<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable =
    [
         'title',
         'title_en',
         'id_blog_cat',
         'avatar',
         'summary',
         'summary_en',
         'content',
         'content_en',
         'meta_description',
         'meta_title',
         'checked',
         'create_at',
         'del_Flg',
         'hight_Flg',
         'status',
         'slug'
    ];

    public function News_Cat()
    {
        return $this->hasMany('App\Models\Blog_Cat', 'Id_Blog_Cat','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
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
         'del_Flg',
         'hight_Flg',
         'status',
         'created_at',
         'slug',
         'position'
    ];

    public function Blog_Cats()
    {
        return $this->hasMany('App\Models\Blogs_Cat', 'id_blog_cat','id');
    }
}

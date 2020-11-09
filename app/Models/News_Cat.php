<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_Cat extends Model
{
    protected $table = 'blog_cats';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable =
    [
         'title',
         'title_en',
         'avatar',
         'summary',
         'summary_en',
         'meta_description',
         'meta_title',
         'status',
         'del_flg',
         'create_at',
         'vi_tri',
         'position',
         'slug'
    ];

    public function News()
    {
        return $this->belongsTo('App\Models\Blog', 'id','id');
    }
}

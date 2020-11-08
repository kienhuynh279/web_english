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
         'Title',
         'Slug'
    ];

    public function News()
    {
        return $this->belongsTo('App\Models\Blog', 'id','id');
    }
}

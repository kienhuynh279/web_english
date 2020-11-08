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
         'Title',
         'Id_Blog_Cat',
         'Avatar',
         'Summary',
         'Content',
         'Checked',
         'Del_Flg',
         'Hight_Flg',
         'Status',
         'Slug'
    ];

    public function News_Cat()
    {
        return $this->hasMany('App\Models\Blog_Cat', 'Id_Blog_Cat','id');
    }
}

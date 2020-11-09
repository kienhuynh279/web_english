<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCats extends Model
{
    protected $table = "thepost_cats";
    protected $primaryKey = "id";
    protected $guarded =[];
    protected $fillable = [
        'title',
        'title_en',
        'status',
        'del_flg',
        'slug'
   ];
}

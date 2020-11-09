<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCategory extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = "thetest_cats";
    protected $primaryKey = "id";
    protected $guarded = [];
    protected $fillable = [
        'title',
        'title_en',
        'summary',
        'summary_en',
        'content',
        'meta_description',
        'meta_title',
        'status',
        'del_flg',
        'slug',
        'position'
    ];
}
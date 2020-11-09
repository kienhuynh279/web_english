<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = "thetest";
    protected $primaryKey = "id";
    protected $guarded = [];
    protected $fillable = [
        'title',
        'tittle_en',
        'code',
        'summary',
        'summary_en',
        'content',
        'content_en',
        'del_flg',
        'high_flg',
        'status',
        'rank',
        'answer',
        'question',
        'slug',
        'position',
        'result'
    ];
}
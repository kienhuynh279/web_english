<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormCategory extends Model
{
    protected $table = 'theform_cats';
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
        'slug',
        'parent_id'
    ];

    public function Form()
    {
        return $this->belongsTo('app\Models\Form', 'id','id');
    }
}

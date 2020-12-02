<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentNews extends Model
{
    protected $table ='commentnews';
    protected $primaryKey = 'com_id';
    protected $guarded = [];
}

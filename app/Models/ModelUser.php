<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $guarded =[];

    public function getAuthPassword()
    {
         return $this->password;
    }
}

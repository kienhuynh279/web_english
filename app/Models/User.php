<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = "id";

    protected $guarded = [];

    protected $fillable = [
        'email',
        'password',
        'username',
        'name',
        'loaitaikhoan',
        'avatar',
        'callname',
        'email',
        'address',
        'intro',
        'gioithieu',
        'phone',
        'phone2',
        'ngaysinh',
        'gioitinh',
        'del_flg',
        'status',
        'slug',
        'active',
        'position',
        'sub',
        'domain',
        'type',
        'nhom',
        'diachi',
        'makm',
        'username',
        'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
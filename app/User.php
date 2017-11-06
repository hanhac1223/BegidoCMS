<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 05/11/2017
 * Time: 11:38 AM
 */
namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    protected $table = 'taikhoan';
    protected $fillable = [
        'tendangnhap',  'password',
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function getAuthPassword(){
        //your password field name
        return $this->password;
    }

}

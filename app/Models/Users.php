<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ['name', 'phone', 'email', 'address', 'password'];

    public function Comment(){
        return $this->hasMany('App\Models\Comment', 'product_id','id');
    }

    public function Rate(){
        return $this->hasMany('App\Models\Rate', 'product_id','id');
    }
}

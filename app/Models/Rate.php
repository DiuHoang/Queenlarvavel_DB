<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table = "rate";
    protected $fillable = ['quantity'];

    public function Product(){
        return $this->belongsToMany('App\Models\Product', 'product_id','id');
    }

    public function Users(){
        return $this->belongsToMany('App\Models\Users', 'user_id','id');
    }
}

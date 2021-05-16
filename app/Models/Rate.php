<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "rate";
    protected $fillable = ['quantity','product_id','user_id' ];

    public function Product(){
        return $this->belongsToMany('App\Models\Product', 'id','product_id');
    }

    public function Users(){
        return $this->belongsToMany('App\Models\Users', 'id','user_id');
    }
}

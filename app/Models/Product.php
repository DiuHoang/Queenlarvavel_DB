<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "products";
    protected $fillable = ['name', 'picture', 'price', 'discount', 'description','service_category_id', 'vendor_id'];

    public function Vendor(){
        return $this->belongsToMany('App\Models\Vendor', 'id','vendor_id');
    }

    public function Service_category(){
        return $this->belongsToMany('App\Models\Service_category', 'id','service_category_id');
    }

    public function Comment(){
        return $this->hasMany('App\Models\Comment', 'product_id','id');
    }

    public function Rate(){
        return $this->hasMany('App\Models\Rate', 'product_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "products";
    protected $fillable = ['id','name', 'picture', 'price', 'discount', 'quantity','description','service_category_id', 'vendor_id'];

    public function Vendor(){
        return $this->hasMany('App\Models\Vendor', 'vendor_id','id');
    }

    public function Service_category(){
        return $this->belongsToMany('App\Models\Service_category', 'id','service_category_id');
    }
    public function Order_List(){
        return $this->belongsToMany('App\Models\Order_List', 'id','product_id');
    }
    public function Comment(){
        return $this->hasMany('App\Models\Comment', 'product_id','id');
    }

    public function Rate(){
        return $this->hasMany('App\Models\Rate', 'product_id','id');
    }
}

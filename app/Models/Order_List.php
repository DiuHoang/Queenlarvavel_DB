<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_List extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "order_list";
    protected $fillable = ['id', 'product_id', 'vendor_id', 'user_id', 'quantity', 'created_at', 'updated_at'];    
    public function Product(){
        return $this->hasMany('App\Models\Product', 'id', 'product_id');
    }
    public function Vendor(){
        return $this->hasMany('App\Models\Vendor', 'id', 'vendor_id');
    }

    public function Users(){
        return $this->hasMany('App\Models\Users', 'id', 'user_id');
    }

    public function Order(){
        return $this->belongsTo('App\Models\Order', 'orderlist_id','id');
    }
    
}

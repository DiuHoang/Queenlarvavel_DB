<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_List extends Model
{
    use HasFactory;
    protected $table = "order_list";
    protected $fillable = ['id', 'product_id', 'vendor_id', 'order_id', 'quantity', 'created_at', 'updated_at'];    
    public function Product(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    public function Vendor(){
        return $this->belongsTo('App\Models\Vendor', 'vendor_id', 'id');
    }
    
}

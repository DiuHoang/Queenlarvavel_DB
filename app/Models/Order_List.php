<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_List extends Model
{
    use HasFactory;
    protected $table = "order_list";
    protected $fillable = ['product_id', 'vendor_id', 'order_id', 'quantity', 'created_at', 'updated_at'];    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "orders";
    protected $fillable = ['name', 'phone', 'address', 'order_time', 'note', 'status'];

    public function Bill(){
        return $this->hasMany('App\Models\Bill', 'order_id','id');
    }

    // public function Vendor(){
    //     return $this->belongsToMany('App\Models\Vendor', 'vendor_id','id');
    // }

    
}

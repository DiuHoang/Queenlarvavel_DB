<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "orders";
    protected $fillable = ['name', 'phone', 'address', 'order_time', 'note', 'status', 'user','orderlist_id'];

    public function Bill(){
        return $this->hasMany('App\Models\Bill', 'order_id','id');
    }

    

    
}

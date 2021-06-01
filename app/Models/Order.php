<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "orders";
<<<<<<< HEAD
    protected $fillable = ['name', 'phone', 'address', 'order_time', 'note', 'status'];
=======
    protected $fillable = ['name', 'phone', 'address', 'order_time', 'note', 'status', 'user_id', 'vendor_id', 'orderlist_id'];
>>>>>>> 863b445427a01b2b1ed583e187b04d981c85b5cc

    public function Bill(){
        return $this->hasMany('App\Models\Bill', 'order_id','id');
    }

    

    
}

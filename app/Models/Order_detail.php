<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "order_detail";

    public function Order_List(){
        return $this->belongsToMany('App\Models\Order_List', 'id','list_id');
    }

    public function Order(){
        return $this->belongsToMany('App\Models\Order', 'id','order_id');
    }
}

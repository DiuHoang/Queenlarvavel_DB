<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "bill";
    protected $fillable = ['status'];

    public function Order(){
        return $this->belongsToMany('App\Models\Order', 'id','order_id');
    }
}

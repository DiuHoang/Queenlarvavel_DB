<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "notification";
    protected $fillable = [ 'vendor_id', 'order_id'];    
    public function Vendor(){
        return $this->hasMany('App\Models\Vendor', 'id', 'vendor_id');
    }
    public function Order(){
        return $this->hasMany('App\Models\Order', 'id', 'order_id');
    }

}

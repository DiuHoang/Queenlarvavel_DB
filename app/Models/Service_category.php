<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_category extends Model
{
    use HasFactory;
    protected $table = "service_category";
    protected $fillable = ['name', 'picture', 'description'];

    public function Product(){
        return $this->hasMany('App\Models\Product', 'id','vendor_id');
    }

    public function Vendor(){
        return $this->hasMany('App\Models\Vendor', 'id','vendor_id');
    }
}

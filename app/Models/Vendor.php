<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "vendors";
    protected $fillable = ['name', 'phone', 'email', 'address', 'avatar', 'description','service_category_id'];

    public function Service_category(){
        return $this->belongsToMany('App\Models\Service_category', 'id','service_category_id');
    }

    public function Product(){
        return $this->belongsToMany('App\Models\Product', 'id','vendor_id');
    }

    public function Order(){
        return $this->hasMany('App\Models\Order', 'vendor_id','id');
    }

}

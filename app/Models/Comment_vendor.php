<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_vendor extends Model
{
    use HasFactory;
    protected $table = "comment_vendor";
    protected $fillable = ['content'];

    public function Product(){
        return $this->belongsToMany('App\Models\Product', 'product_id','id');
    }
    public function Vendor(){
        return $this->belongsToMany('App\Models\Vendor', 'vendor_id','id');
    }

    public function Users(){
        return $this->belongsToMany('App\Models\Users', 'user_id','id');
    }
}

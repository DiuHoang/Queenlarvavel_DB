<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "comment";
    protected $fillable = ['content'];

    public function Product(){
        return $this->belongsToMany('App\Models\Product', 'product_id','id');
    }

    public function Users(){
        return $this->belongsToMany('App\Models\Users', 'user_id','id');
    }
}

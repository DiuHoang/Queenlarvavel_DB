<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $table = "chat";
    protected $fillable = ['content'];
    public function Users(){
        return $this->belongsToMany('App\Models\Users', 'user_id','id');
    }
}

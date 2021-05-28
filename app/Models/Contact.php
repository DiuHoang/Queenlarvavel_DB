<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "contact";
    protected $fillable = ['email', 'phone', 'content'];
}

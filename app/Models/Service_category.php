<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_category extends Model
{
    use HasFactory;
    protected $table = "service_category";
    protected $fillable = ['name', 'picture', 'description'];
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = "vendors";
    protected $fillable = ['id','name', 'phone', 'email', 'address', 'avatar', 'description', 'password', 'document', 'status','service_category_id'];

    public function Service_category(){
        return $this->belongsToMany('App\Models\Service_category', 'id','service_category_id');
    }

    public function Product(){
        return $this->hasMany('App\Models\Product', 'vendor_id','id');
    }

    public function Order(){
        return $this->hasMany('App\Models\Order', 'vendor_id','id');
    }
    public function Order_List(){
        return $this->hasMany('App\Models\Order_List', 'vendor_id','id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

<?php

namespace App\Http\Controllers;
use App\Models\Order_List;
use App\Models\Order;
use App\Models\Notification;
use Illuminate\Http\Request;

class vendor_manage_order_controller extends Controller
{
    //
    public function getOrderByvendor(){
        $order = Notification::all();
        foreach($order as $od){
            $od = $od::with('Order')->get();

        }

        return $od;
    }
}

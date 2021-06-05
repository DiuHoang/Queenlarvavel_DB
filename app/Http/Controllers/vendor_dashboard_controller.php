<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vendor_dashboard_controller extends Controller
{
    public function total_card($vendor_id)
    {
        $totalUsers = Users::distinct()->count('id');

        $totalOrder = DB::table('orders')
        ->join('order_list', 'order_list.id', '=', 'order.orderlist_id')
        ->where('order_list.vendor_id', '=', $vendor_id)
        ->count('orderlist.user_id', '=', 'orders.user');


        $totalRevenue = 0;
        // DB::table('products')
        // ->join('order_list', 'order_list.product_id', '=', 'products.id')
        // ->join('orders', 'order_list.user_id', '=', 'orders.user')
        // ->where('order_list.vendor_id', '=', $vendor_id)
        // ->where('orders.status', '=', 'ĐH thành công')
        // ->sum('products.price', '*', 'order_list.quantity');


        $total_card =["totalUser"=>$totalUsers, "totalOrder"=>$totalOrder, "totalRevenue"=>$totalRevenue];
        return response()->json($total_card);
    }
}

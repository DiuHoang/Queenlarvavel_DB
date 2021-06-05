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
        ->join('order_list', 'order_list.id', '=', 'orders.orderlist_id')
        ->where('order_list.vendor_id', '=', $vendor_id)
        ->count('order_list.user_id', '=', 'orders.user');

        $totalRevenue = DB::table('products')
        ->join('order_list', 'order_list.product_id', '=', 'products.id')
        ->join('orders', 'orders.orderlist_id', '=', 'order_list.id')
        ->where('orders.status', '=', 'ĐH thành công')
        ->where('order_list.vendor_id', '=', $vendor_id)
        ->sum(2 * 3);


        $total_card =["totalUser"=>$totalUsers, "totalOrder"=>$totalOrder, "totalRevenue"=>$totalRevenue];
        return response()->json($total_card);
    }

    public function index($vendor_id)
    {
        $product = DB::table('products')
        ->where('vendor_id', $vendor_id)
        ->paginate(5);
        return response()->json($product);
    }

}

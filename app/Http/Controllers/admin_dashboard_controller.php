<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_dashboard_controller extends Controller
{
    public function total_user()
    {
        $totalUsers = Users::distinct()->count('id');
        return response()->json($totalUsers);
    }

    public function total_order()
    {
        $totalOrder = Order::distinct()->count('id');
        return response()->json($totalOrder);
    }

    public function total_revenue(){
        $totalRevenue = DB::select("select sum(p.price) as sumPrice from products as p, order_list as lo where p.id=lo.product_id");
        return $totalPrice;
    }

}

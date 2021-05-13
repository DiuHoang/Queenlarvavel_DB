<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_dashboard_controller extends Controller
{
    public function total_card()
    {
        $totalUsers = Users::distinct()->count('id');
        $totalOrder = Order::distinct()->count('id');
        $totalRevenue = Product::distinct()->sum('price');;
        $total_card =["totalUser"=>$totalUsers, "totalOrder"=>$totalOrder, "totalRevenue"=>$totalRevenue];
        return response()->json($total_card);
    }

    public function chart_section()
    {
        $totalLoamay = Product::where('service_category_id','=',1)->count('id');
        $totalBanhkem = Product::where('service_category_id','=',2)->count('id');
        $totalThucan = Product::where('service_category_id','=',4)->count('id');
        $totalTrangtri = Product::where('service_category_id','=',3)->count('id');
        $ChartSection =[ "totalLoamay"=>$totalLoamay,"totalBanhkem"=>$totalBanhkem, "totalTrangtri"=>$totalTrangtri,"totalThucan" =>$totalThucan];
        return response()->json($ChartSection);
    }

    public function chart2(){
        $month1 = DB::table("users")
        ->whereMonth('created_at', '=', '01')
        ->count('id');
        $month2 = DB::table("users")
        ->whereMonth('created_at', '=', '02')
        ->count('id');
        $month3 = DB::table("users")
        ->whereMonth('created_at', '=', '03')
        ->count('id');
        $month4 = DB::table("users")
        ->whereMonth('created_at', '=', '04')
        ->count('id');
        $month5 = DB::table("users")
        ->whereMonth('created_at', '=', '05')
        ->count('id');
        $month6 = DB::table("users")
        ->whereMonth('created_at', '=', '06')
        ->count('id');
        $month7 = DB::table("users")
        ->whereMonth('created_at', '=', '07')
        ->count('id');
        $month8 = DB::table("users")
        ->whereMonth('created_at', '=', '08')
        ->count('id');
        $month9 = DB::table("users")
        ->whereMonth('created_at', '=', '09')
        ->count('id');
        $month10 = DB::table("users")
        ->whereMonth('created_at', '=', '10')
        ->count('id');
        $month11 = DB::table("users")
        ->whereMonth('created_at', '=', '11')
        ->count('id');
        $month12 = DB::table("users")
        ->whereMonth('created_at', '=', '12')
        ->count('id');
        $month = [
            "month1"=>$month1,
            "month2"=>$month2,
            "month3"=>$month3,
            "month4"=>$month4,
            "month5"=>$month5,
            "month6"=>$month6,
            "month7"=>$month7,
            "month8"=>$month8,
            "month9"=>$month9,
            "month10"=>$month10,
            "month11"=>$month11,
            "month12"=>$month12,
        ];
        return response()->json($month);
    }
}

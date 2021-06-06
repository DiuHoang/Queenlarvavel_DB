<?php

namespace App\Http\Controllers;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    function vendor() {
        $vendor = Vendor::orderBy('created_at', 'desc')->take(6)
        ->get();
          return json_encode($vendor);
    } 
    function getFoodRestaurant(){
        // $foodrtr = DB::select("select v.avatar ,v.name from vendors as v where v.service_category_id = 1 limit 4");
        $foodrtr = Vendor::orderBy('created_at', 'desc')->where("service_category_id",1)->take(4)->get();
        return json_encode($foodrtr);
    }function getCakeRestaurant(){
        $cakertr = Vendor::orderBy('created_at', 'desc')->where("service_category_id",2)->take(4)->get();
        return json_encode($cakertr);
    }function getSpeakerRestaurant(){
        //$speakerrtr = DB::select("select v.avatar ,v.name from vendors as v where v.service_category_id = 3 limit 4");
        $speakerrtr = Vendor::orderBy('created_at', 'desc')->where("service_category_id",3)->take(4)->get();
        return json_encode($speakerrtr);
    }function getDecorRestaurant(){
        //$decorrtr = DB::select("select v.avatar ,v.name from vendors as v where v.service_category_id = 4 limit 4");
        $decorrtr = Vendor::orderBy('created_at', 'desc')->where("service_category_id",4)->take(4)->get();
        return json_encode($decorrtr);
    }
    function detail($id){
        $vendor = DB::table('vendors')->where("id",$id)->first();
       return json_encode($vendor);
    }
    function getAllVendor(){
        $allvendor = Vendor::orderBy('created_at', 'desc')
        //->groupBy('service_category_id')
       ->orderBy('name')
        ->get();
          return json_encode($allvendor);
    }
}

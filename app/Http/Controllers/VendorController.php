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
        $foodrtr = DB::select("select v.avatar ,v.name from vendors as v where v.service_category_id = 1");
        return json_encode($foodrtr);
    }function getCakeRestaurant(){
        $cakertr = DB::select("select v.avatar ,v.name from vendors as v where v.service_category_id = 2");
        return json_encode($cakertr);
    }function getSpeakerRestaurant(){
        $speakerrtr = DB::select("select v.avatar ,v.name from vendors as v where v.service_category_id = 3");
        return json_encode($speakerrtr);
    }function getDecorRestaurant(){
        $decorrtr = DB::select("select v.avatar ,v.name from vendors as v where v.service_category_id = 4");
        return json_encode($decorrtr);
    }
    function detail($id){
        $vendor = DB::table('vendors')->where("id",$id)->first();
       return json_encode($vendor);
    }
}

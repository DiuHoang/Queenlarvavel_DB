<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // function getProduct($id){
    //     $product = DB::select("select v.id,p.name ,p.picture from products as p, vendors as v where p.vendor_id = v.id = $id");
    //     return json_encode($product);
    // }
    function getProduct($id){
        $product = DB::table('products')->where("vendor_id",$id)->get();
       return json_encode($product);
    }
    function detail($id){
        $product = Product::find($id);
       return response()->json($product);
      }
    function foodRestaurant(){
        $foodr = DB::table('vendors')
        ->where("service_category_id",1)
        ->get();
          return response()->json($foodr);
    }
    function cakeRestaurant(){
        $caker = DB::table('vendors')
        ->where("service_category_id",2)
        ->get();
          return response()->json($caker);
    }
    function speakerRestaurant(){
        $speakerr = DB::table('vendors')
        ->where("service_category_id",3)
        ->get();
          return response()->json($speakerr);
    }
    function decorRestaurant(){
        $decorr = DB::table('vendors')
        ->where("service_category_id",4)
        ->get();
          return response()->json($decorr);
    }
}

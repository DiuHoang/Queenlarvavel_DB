<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class StarRatingController extends Controller
{
    //
    public function getStar($productId){
        // $productId = $request->product_id;
        // $count = Rate::where('product_id','=',$productId)->count();
        // if ($count > 1) {
        //     $star = Rate::where('product_id','=',$productId)->avg('quantity');
    
        // } else {
        //     $star = Rate::where('product_id','=',$productId)->get();
        // }
       
        // return response()->json($star);
        $star = Rate::where('product_id', $productId)->selectRaw('SUM(quantity)/COUNT(user_id) AS avg_rating')->first()->avg_rating;
        return response()->json($star);
    }

    public function postStar(){
        
    }
}

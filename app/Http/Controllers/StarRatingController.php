<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class StarRatingController extends Controller
{
    //
    public function getStar($product_id){
        // $productId = $request->product_id;
        // $count = Rate::where('product_id','=',$productId)->count();
        // if ($count > 1) {
        //     $star = Rate::where('product_id','=',$productId)->avg('quantity');
    
        // } else {
        //     $star = Rate::where('product_id','=',$productId)->get();
        // }
       
        // return response()->json($star);
        $star = Rate::where('product_id', $product_id)->selectRaw('SUM(quantity)/COUNT(user_id) AS avg_rating')->first()->avg_rating;
        return json_encode($star);
    }

    public function postReview(Request $request){
        $request->validate([
            'quantity' => 'required',
        ]);

        $review = new Rate([
            'quantity' => $request->quantity,
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
        ]);
        
        $review->save();
        return json_encode($review);
    }
}

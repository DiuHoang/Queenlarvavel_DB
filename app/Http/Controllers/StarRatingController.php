<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use Illuminate\Support\Facades\DB;
class StarRatingController extends Controller
{
    //
    public function getStar($product_id){
       
        // $star = Rate::where('product_id', $product_id)->selectRaw('SUM(quantity)/COUNT(user_id) AS avg_rating')->first()->avg_rating;
        // return json_encode($star);
       
        $star = Rate::select(DB::raw("sum(cast(quantity)) /count(cast(user_id)) where product_id = $product_id"))->get();
        // $star = DB::table('rate')
        // ->where('rate.product_id', $product_id)
        // ->sum('rate.quantity');

        // $star1 = DB::table('rate')
        // ->where('rate.product_id', $product_id)
        // ->count('rate.user_id');

        // $result = $star/$star1;
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

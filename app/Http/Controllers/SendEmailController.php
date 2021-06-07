<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_List;
use App\Models\Vendor;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\DB;
class SendEmailController extends Controller
{
    //
    public function sendEmail(Request $request)
{
    $orders = Order::find($request->id);
    $user = User::find($request->id_user);
//     $vendors = Vendor::all();
//     $orderlists = Order_List::all();
//     $outputVendor = [];
//     foreach($vendors as $vendor){
//         $vendor['productOrder'] = $vendor->Order_List()->get();
        
//         if(count($vendor['productOrder']) != 0  ){
//             foreach($orderlists as $orderlist){
//                 $vendor['productOrder'] = $orderlist::with('Product')->where('vendor_id', $vendor['id'])->get();
//         }
//         array_push($outputVendor, $vendor);
//         }
//     }
    $user_order = DB::select("SELECT orders.* from orders where orders.id = $orders");


   $message = [
       //những gì hiển thị ở View
       'order' => 'Thông tin người nhận',
       'infor' => "user_order,,",
       'listOrderTitle' => 'Những sản phẩm bạn đã đặt hàng',
       'content' => "outputVendor",
   ];
SendEmail::dispatch($message, $user)->delay(now()->addMinute(1));

//    return redirect()->back();
   return $user_order;
}
}

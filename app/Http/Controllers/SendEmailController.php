<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_List;
use App\Models\Vendor;
use App\Jobs\SendEmail;
class SendEmailController extends Controller
{
    //
    public function sendEmail(Request $request)
{
    $vendors = Vendor::all();
    $orderlists = Order_List::all();
    $outputVendor = [];
    foreach($vendors as $vendor){
        $vendor['productOrder'] = $vendor->Order_List()->get();
        
        if(count($vendor['productOrder']) != 0  ){
            foreach($orderlists as $orderlist){
                $vendor['productOrder'] = $orderlist::with('Product')->where('vendor_id', $vendor['id'])->get();
        }
        array_push($outputVendor, $vendor);
        }
    }
    $user_order = Order::latest('created_at')->first();


    $users = User::where('email', '=', 'diuhoang2018@gmail.com')->get();
   $message = [
       //những gì hiển thị ở View
       'listOrderTitle' => 'Những sản phẩm bạn đã đặt hàng',
       'content' => "outputVendor",
       'order' => 'Thông tin người nhận',
       'infor' => "user_order",
   ];
   SendEmail::dispatch($message, $users)->delay(now()->addMinute(1));

   return redirect()->back();
}
}

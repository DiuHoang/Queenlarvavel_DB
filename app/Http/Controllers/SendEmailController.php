<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_List;
use App\Models\Vendor;
use App\Jobs\SendEmail;
<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\DB;
class SendEmailController extends Controller
{
    //
    public function sendEmail(Request $request){
        $orders = Order_List::all();
        $user = User::find($request->id_user);
        $name; $phone; $address; $order_time; $created_at;
        $user_infor = DB::select('SELECT orders.name, orders.phone, orders.address, orders.order_time, orders.created_at from orders where orders.id='.$request->id_userOrder);
        foreach ($user_infor as $username) {
            $name = $username->name;
            $phone = $username->phone;
            $address = $username->address;
            $order_time = $username->order_time;
            $created_at = $username->created_at; 
        }
        $productName; $quantity; $price; $vendorName;
        $carts = DB::select("SELECT  order_list.quantity as 'CartQty', products.name AS `ProductName`,
        (products.price * order_list.quantity) as CartPrice, vendors.name AS `VendorName`
        FROM vendors  JOIN order_list  ON order_list.vendor_id = vendors.id
        JOIN products ON products.id = order_list.product_id");
        foreach($carts as $cart){
            $productName = $cart->ProductName;
            $quantity = $cart->CartQty;
            $price = $cart->CartPrice;
            $vendorName = $cart->VendorName;
            return $message = [
                'item_productName' => $productName,
                'item_quantity' => $quantity,
                'item_price' => $price,
                'item_vendorName' => $vendorName,
            ];
        }

    
        $message = [
            //những gì hiển thị ở View
            'recevier_infor' => 'Đơn hàng sẽ được giao đến', 
            'receiver_name' => $name,
            'receiver_phone' => $phone,
            'receiver_address' => $address,
            'order_time' => $order_time,
            'created_time' => $created_at,
            'list_infor' => 'Danh sách các sản phẩm',
            
        ];
        SendEmail::dispatch($message, $user)->delay(now()->addMinute(1));
    }
>>>>>>> c4b9b5801193b343fc562079cb6e5de5f6bc491d
}

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
    public function sendEmail(Request $request){
        $orders = Order_List::all();
        $users = User::find($request->user);
        $message = [];
        $array_message2 = [];
        $name; $phone; $address; $order_time; $created_at;
        $user_infor = DB::select('SELECT orders.name, orders.phone, orders.address, orders.order_time, orders.created_at from orders where orders.id='.$request->order_id);
        foreach ($user_infor as $username) {
            $name = $username->name;
            $phone = $username->phone;
            $address = $username->address;
            $order_time = $username->order_time;
            $created_at = $username->created_at; 
            $message1 = [
                //những gì hiển thị ở View
                'recevier_infor' => 'Đơn hàng sẽ được giao đến', 
                'receiver_name' => $name,
                'receiver_phone' => $phone,
                'receiver_address' => $address,
                'order_time' => $order_time,
                'created_time' => $created_at,
            ];
            array_push($message, $message1);
        }
        $productName; $quantity; $price; $vendorName; $cart_array = [];
        $carts = DB::select("SELECT  order_list.quantity as 'CartQty', products.name AS `ProductName`,
        (products.price * order_list.quantity) as CartPrice, vendors.name AS `VendorName`
        FROM vendors  JOIN order_list  ON order_list.vendor_id = vendors.id
        JOIN products ON products.id = order_list.product_id");
        foreach($carts as $cart){
            $productName = $cart->ProductName;
            $quantity = $cart->CartQty;
            $price = $cart->CartPrice;
            $vendorName = $cart->VendorName;
            $message2 = [
                //những gì hiển thị ở View
                'list_infor' => 'Danh sách các sản phẩm',
                'item_productName' => $productName,
                'item_quantity' => $quantity,
                'item_price' => $price,
                'item_vendorName' => $vendorName,
            ];
            array_push($message, $message2);
        }
        SendEmail::dispatch($message, $users)->delay(now()->addMinute(1));
    }
}

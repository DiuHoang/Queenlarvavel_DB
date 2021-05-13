<?php

namespace App\Http\Controllers;
use App\Models\Order_List;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class CheckoutController extends Controller
{
    
    // Show Cart
    function index(){
        $expenses  = Order_List::all();
        return json_encode($expenses );
    }
    public function destroyCartItem($id)
    {
        $cartItem = Order_List::where("id",$id)->first();
        $cartItem->delete();
        return response()->json([
            'message' => 'item deleted'
        ]);
        
    }
    function getCart(){
        $cart = Order_List::all();
        $carts = DB::select("SELECT order_list.id, products.picture, products.name AS `ProductName`, products.price, vendors.name AS `VendorName`
        FROM order_list  JOIN products  ON order_list.product_id = products.id
        JOIN vendors ON order_list.vendor_id = vendors.id");
        return json_encode($carts);
    }
    function getTotalProduct(){
        $totalProduct = DB::select("select p.price from products as p, order_list as lo where p.id=lo.product_id");
        return json_encode($totalProduct);
    }
    function getTotalPrice(){
        $totalPrice = DB::select("select sum(p.price) as sumPrice from products as p, order_list as lo where p.id=lo.product_id");
        return $totalPrice;
    }
    
    
    public function postOrderList(Request $request){
        $productId = $request->product_id;
        $vendorId = $request->vendor_id;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        DB::table('order_list')->insert(['product_id'=>$productId, 'vendor_id' => $vendorId, 'created_at' => $created_at, 'updated_at' => $updated_at]);
    } 
    // Payment
    public function postOrder(Request $request){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
            'address' => 'required|string',
            'order_time' => 'required',
            'note' => 'required|string'
        ]);

        $order = new Order([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'order_time' => $request->order_time,
            'note' => $request->note,
            'user_id' => 5
        ]);
        // $order = new Order;

        // $order->name = $request->name;
        // $order->phone = $request->phone;
        // $order->address = $request->address;
        // $order->order_time = $request->order_time;
        // $order->note = $request->note;
        // $order->user_id = $request->user_id;
        // $order->vendor_id = $request->vendor_id;

        $order->save();
        return json_encode($order);
        
    }

    public function getOrder(){
        $user_order = Order::latest('created_at')->first();

        return json_encode($user_order);

    }

    public function getOrderWithUser(Request $request){
        $userId = $request->user_id;
        $order = Order::where('user_id', 5)->get();

        return json_encode($order);
    }
   
     
    public function deleteOrder(){
        $orderDelete = Order_List::delete();
        return json_encode($orderDelete);
    }

    public function cancelOrder(){
        $latests = Order::latest()->first()->delete();
        return json_encode($latests);
        dd($latests);
    }
       
}

<?php

namespace App\Http\Controllers;
use App\Models\Order_List;
use App\Models\Order;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection; 
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
    //     $carts = Vendor::join('order_list', 'order_list.vendor_id', '=', 'vendors.id')
    //    -> join('products', 'order_list.product_id', '=', 'products.id')
    //    ->select('order_list.id as olid','order_list.vendor_id', 'order_list.quantity', 'products.id', 
    //     'products.quantity', 'products.picture', 'products.name as ProdName' ,
    //     'products.price', 'vendors.name')
    //    ->get();
    //     foreach($carts as $cart){
    //         $cart->Order_List;
    //     }
    //     return response()->json($carts);
     $carts = DB::select("SELECT  order_list.quantity as 'CartQty',
         products.picture, products.name AS `ProductName`,
        (products.price * order_list.quantity) as CartPrice, vendors.name AS `VendorName`
        FROM vendors  JOIN order_list  ON order_list.vendor_id = vendors.id
        JOIN products ON products.id = order_list.product_id");
        return $carts;
    }
    public function getProductVendo(){
        $vendors = Vendor::all();
        $orderlists = Order_List::all();
        $outputVendor = [];
        $outputProduct = [];
        foreach($vendors as $vendor){
            $vendor['productOrder'] = $vendor->Order_List()->get();
            
            if(count($vendor['productOrder']) != 0  ){
                foreach($orderlists as $orderlist){
                    $vendor['productOrder'] = $orderlist::with('Product')->where('vendor_id', $vendor['id'])->get();
            }
            array_push($outputVendor, $vendor);
            }
        }
        return json_encode($outputVendor);
    }

    function getTotalProduct(){
        $totalProduct = DB::select("select p.price from products as p, order_list as lo where p.id=lo.product_id");
        return json_encode($totalProduct);
    }

    function getTotalPrice(){
        $totalPrice = DB::select("SELECT sum(products.price * order_list.quantity) as sumPrice 
        FROM order_list  JOIN products  ON order_list.product_id = products.id");
        return json_encode($totalPrice);
    }
    
    public function postOrderList(Request $request){
        $productId = $request->product_id;
        $userId = $request->user_id;
        $vendorId = $request->vendor_id;
        $quantity = 1;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        DB::table('order_list')->insert(['product_id'=>$productId, 'user_id' => $userId,'vendor_id' => $vendorId, 'quantity'=>$quantity, 'created_at' => $created_at, 'updated_at' => $updated_at]);
    } 
    public function postOrder(Request $request){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|digits:10|regex:/(0)[0-9]{9}/',
            'address' => 'required|string',
            'order_time' => 'required',
            'note' => 'required|string',
            'status' => 'required|string'
        ]);

        $order = new Order([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'order_time' => $request->order_time,
            'note' => $request->note,
            'status' => "ĐH mới",
            'user'=> $request->user,
            'orderlist_id' => $request->orderlist_id,
        ]);

        $order->save();
        return json_encode($order);
        
    }

    public function postNotification(Request $request){
        $noti = new Notification([
            'vendor_id'=> $request->vendor_id,
            'order_id' => $request->order_id
        ]);

        $noti->save();
        return json_encode($noti);
        
    }

    public function getOrder(){
        $user_order = Order::latest('created_at')->first();

        return json_encode($user_order);

    }

    public function getOrderWithUser(Request $request){
        $order = Order::latest()->first();

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

    function increase($id){
        $cart = Order_List::where("id",$id)->first();
        $qtt = Order_List::where('id','=',$id)->value("quantity");
        $cart->quantity = $qtt + 1;
        $cart->save();
        return response()->json($cart);
    }
    function decrease($id){
        $cart = Order_List::where("id",$id)->first();
        $qtt = Order_List::where('id','=',$id)->value("quantity");
        
        if($cart->quantity <= 1){
            $cart->quantity = 1;
        }
        else{
            $cart->quantity = $qtt - 1;
        }
        $cart->save();
        return response()->json($cart);
    }

    public function getLastUser(){
        $lastUser = User::latest('created_at')->first();
        return json_encode($lastUser);
    }
       
}

<?php

namespace App\Http\Controllers;
use App\Models\Order_List;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    
    // Show Cart
    function getCart(){
        $cart = Order_List::all();
        $carts = DB::select("SELECT products.picture, products.name AS `ProductName`, products.price, vendors.name AS `VendorName`
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
    public function destroy($id)
	{   
		$listOrder = Order_List::find($id);
		$listOrder->delete();
		return redirect('cart');

	}
    
    public function postOrderList(Request $request){
        $productId = $request->product_id;
        $vendorId = $request->vendor_id;
        DB::table('order_list')->insert(['product_id'=>$productId, 'vendor_id' => $vendorId]);
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
            'user_id' => $request->user_id
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
}

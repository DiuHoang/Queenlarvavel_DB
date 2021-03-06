<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Users;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_order_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_order_by_vendor($vendor_id){
        $order_list = DB::select("select orders.id, orders.name, orders.phone, orders.order_time, orders.address,
        orders.note, orders.status, orders.orderlist_id, orders.created_at,orders.user as user_id from orders, order_list 
        where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id group by orders.id"); 
        return response()->json($order_list);
    }

    // public function get_cancel_order_by_vendor($vendor_id){
    //     $DHM = "ĐH từ chối";
    //     $order_list = DB::select("select orders.id, orders.name, orders.phone, orders.order_time, orders.address,
    //     orders.note, orders.status, orders.orderlist_id, orders.created_at,orders.user as user_id from orders, order_list 
    //     where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = $DHM group by orders.user_id"); 
    //     return response()->json($order_list);
    // }

    // public function get_new_order_by_vendor($vendor_id){
    //     $DHM = "ĐH mới";
    //     $order_list = DB::select("select orders.id, orders.name, orders.phone, orders.order_time, orders.address,
    //     orders.note, orders.status, orders.orderlist_id,orders.created_at, orders.user as user_id from orders, order_list 
    //     where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = $DHM group by orders.user_id"); 
    //     return response()->json($order_list);
    // }

    // public function get_handling_order_by_vendor($vendor_id){
    //     $DHM = "ĐH đang xử lí";
    //     $order_list = DB::select("select orders.id, orders.name, orders.phone, orders.order_time, orders.address,
    //     orders.note, orders.status, orders.orderlist_id,orders.created_at, orders.user as user_id from orders, order_list 
    //     where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = $DHM  group by orders.user_id");
    //     return response()->json($order_list);
    // }

    // public function get_success_order_by_vendor($vendor_id){
    //     $DHM = "ĐH thành công";
    //     $order_list = DB::("select orders.id, orders.name, orders.phone, orders.order_time, 
    //     orders.note, orders.status, orders.orderlist_id,orders.created_at, orders.user as user_id from orders, order_list 
    //     where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = $DHM group by orders.user_id");
    //     return response()->json($order_list);
    // }
    
    public function detail_order($user_id, $vendor_id){
        $order = DB::table('products')
        ->join('order_list', 'order_list.product_id', '=', 'products.id')
        ->where('order_list.user_id', $user_id)
        ->where('order_list.vendor_id', $vendor_id)
        ->get();
        
        $total = 0;
        for($i=0; $i < count($order); $i++){
            $total += $order[$i]->price * $order[$i]->quantity;
        }
        return response()->json([$order,$total]);
    }

    public function user_order($id){
        $user = DB::table('orders')
            ->where('user', $id)
            ->get();
            return response()->json($user);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = DB::table('orders')
              ->where('id', $id)
              ->update(['status' => $request->status]);

        return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}

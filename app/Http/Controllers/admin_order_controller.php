<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Users;
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
        $order_list = DB::select("select orders.user as id from orders, order_list where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id group by orders.name");
        // return json_encode($order_list);
        $arr =[];
        for($i =0; $i < count($order_list ); $i++){
            $order = DB::table('products')
            ->join('order_list', 'order_list.product_id', '=', 'products.id')
            ->where('order_list.user_id', $order_list[$i]->id)
            ->get();
            array_push($arr,['id'=>$order_list[$i]->id, 'list_product'=>$order]);
        }
         return json_encode($arr);
    }

    public function get_cancel_order_by_vendor($vendor_id){
        $order_list = DB::select("select orders.user as id from orders, order_list where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = -1 group by orders.name");
        // return json_encode($order_list);
        $arr =[];
        for($i =0; $i < count($order_list ); $i++){
            $order = DB::table('products')
            ->join('order_list', 'order_list.product_id', '=', 'products.id')
            ->where('order_list.user_id', $order_list[$i]->id)
            ->get();
            array_push($arr,['id'=>$order_list[$i]->id, 'list_product'=>$order]);
        }
         return json_encode($arr);
    }

    public function get_new_order_by_vendor($vendor_id){
        $order_list = DB::select("select orders.user as id from orders, order_list where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = 0 group by orders.name");
        // return json_encode($order_list);
        $arr =[];
        for($i =0; $i < count($order_list ); $i++){
            $order = DB::table('products')
            ->join('order_list', 'order_list.product_id', '=', 'products.id')
            ->where('order_list.user_id', $order_list[$i]->id)
            ->get();
            array_push($arr,['id'=>$order_list[$i]->id, 'list_product'=>$order]);
        }
         return json_encode($arr);
    }

    public function get_handling_order_by_vendor($vendor_id){
        $order_list = DB::select("select orders.user as id from orders, order_list where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = 1 group by orders.name");
        // return json_encode($order_list);
        $arr =[];
        for($i =0; $i < count($order_list ); $i++){
            $order = DB::table('products')
            ->join('order_list', 'order_list.product_id', '=', 'products.id')
            ->where('order_list.user_id', $order_list[$i]->id)
            ->get();
            array_push($arr,['id'=>$order_list[$i]->id, 'list_product'=>$order]);
        }
         return json_encode($arr);
    }

    public function get_success_order_by_vendor($vendor_id){
        $order_list = DB::select("select orders.user as id from orders, order_list where order_list.user_id = orders.user and order_list.vendor_id = $vendor_id and orders.status = 2 group by orders.name");
        // return json_encode($order_list);
        $arr =[];
        for($i =0; $i < count($order_list ); $i++){
            $order = DB::table('products')
            ->join('order_list', 'order_list.product_id', '=', 'products.id')
            ->where('order_list.user_id', $order_list[$i]->id)
            ->get();
            array_push($arr,['id'=>$order_list[$i]->id, 'list_product'=>$order]);
        }
         return json_encode($arr);
    }
    // public function index_cancel()
    // {
    //     $order = DB::table('orders')->where('status', -1)->paginate(5);
    //     return response()->json($order);
    // }

    // public function index_waiting()
    // {
    //     $order = DB::table('orders')->where('status', 0)->paginate(5);
    //     return response()->json($order);
    // }

    // public function index_handling()
    // {
    //     $order = DB::table('orders')->where('status', 1)->paginate(5);
    //     return response()->json($order);
    // }

    // public function index_success()
    // {
    //     $order = DB::table('orders')->where('status', 2)->paginate(5);
    //     return response()->json($order);
    // }
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

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
    public function index_cancel()
    {
        $order = DB::table('orders')->where('status', -1)->paginate(5);
        return response()->json($order);
    }

    public function index_waiting()
    {
        $order = DB::table('orders')->where('status', 0)->paginate(5);
        return response()->json($order);
    }

    public function index_handling()
    {
        $order = DB::table('orders')->where('status', 1)->paginate(5);
        return response()->json($order);
    }

    public function index_success()
    {
        $order = DB::table('orders')->where('status', 2)->paginate(5);
        return response()->json($order);
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

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
class admin_vendor_controller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = DB::table('vendors')->orderBy('id', 'DESC')->paginate(5);
        return response()->json($vendor);
    }

    public function list_new_vendor()
    {
        $vendor = DB::table('vendors')
        ->where('status', '=', 'Đang chờ phê duyệt')
        ->orderBy('id', 'DESC')->paginate(5);
        return response()->json($vendor);
    }

    public function list_vendor_approved()
    {
        $vendor = DB::table('vendors')
        ->where('status', '=', 'Đã được phê duyệt')
        ->orderBy('id', 'DESC')->paginate(5);
        return response()->json($vendor);
    }

    public function list_vendor_rejected()
    {
        $vendor = DB::table('vendors')
        ->where('status', '=', 'Đã từ chối')
        ->orderBy('id', 'DESC')->paginate(5);
        return response()->json($vendor);
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
        return Vendor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vendor::findOrFail($id);
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
        $vendors = DB::table('vendors')
              ->where('id', $id)
              ->update(['status' => $request->status]);

        return response()->json($vendors);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Vendor::where('id',$id)->delete();
    }
}

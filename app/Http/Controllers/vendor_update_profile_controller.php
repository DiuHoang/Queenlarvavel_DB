<?php

namespace App\Http\Controllers;
use App\Models\Vendor;
use Illuminate\Http\Request;

class vendor_update_profile_controller extends Controller{
    public function update_profile(Request $request, $id){
        return Vendor::where('id',$id)->update($request->all());
    }
}

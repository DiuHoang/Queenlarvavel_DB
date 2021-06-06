<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorAuthenController extends Controller
{
   
    function getVendor(){
        $vendors = Vendor::all();
        return json_encode($vendors);
    }
    public function vendorRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed'
        ]);

        $vendor = new Vendor([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'status' => "Chờ phê duyệt"
        ]);

        $vendor->save();

        return response()->json([
            'success' => true,
            'id' => $vendor->id,
            'name' => $vendor->name,
            'email' => $vendor->email,
            'status' => $vendor->status
        ], 201);
    }


    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function vendorLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $email = $request->email;
        $pass = $request->password;
        

        $user = DB::table('vendors') 
                ->where('email',$email)
                ->where('password',$pass)
                ->get();
                
        if(empty($user)){
            return response()->json(0);
        }else
        return response()->json($user);

       
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function vendorLogout(Request $request)
    {
        $request->vendor()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function vendor(Request $request)
    {
        return response()->json($request->vendor());
    }
}

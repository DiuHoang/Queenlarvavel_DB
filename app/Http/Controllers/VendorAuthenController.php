<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Vendor;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;
use Illuminate\Http\Request;

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
            'password' => bcrypt($request->password)
        ]);

        $vendor->save();

        return response()->json([
            'success' => true,
            'id' => $vendor->id,
            'name' => $vendor->name,
            'email' => $vendor->email,
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
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt(['email' => request('email'), 'password' => request('password')]))
            return response()->json([
                'message' => 'Unauthorized Access, please confirm credentials or verify your email'
            ], 401);

        if ($request->remember_me) {
            Passport::personalAccessTokensExpireIn(now()->addWeek(1));
        }

        $vendor = $request->vendor();
        $tokenResult = $vendor->createToken('Token');            
            return response()->json([
                'success' => true,
                'id' => $vendor->id,
                'name' => $vendor->name,
                'email' => $vendor->email,
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString()
            ], 201);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function vendorLogout(Request $request)
    {
        $request->user()->token()->revoke();
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

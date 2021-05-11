<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    // function user_register(Request $req)
    //     return response()->json(200); 
    // }

    // function login(Request $req){

    //     $user = User::where('email', $req->email)->first();

    //     if(!$user || !Hash::check($req->password, $user->password)){
    //         return response([
    //             'error'=>["Email or Password is not matched"]
    //         ]);
    //     }

    //     return $user;
    // }
    function getAccount(){
        $users = User::all();
        return json_encode($users);
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'required|string|email',
            'address' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $user = new User([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json([
            'success' => true,
            'id' => $user->id,
            'name' => $user->name,
            'phone' => $user->phone,
            'email' => $user->email,
            'address' => $user->address,
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
    public function login(Request $request)
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

        $user = $request->user();
        $tokenResult = $user->createToken('Token');            
            return response()->json([
                'success' => true,
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'address' => $user->address,
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
    public function logout(Request $request)
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
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}

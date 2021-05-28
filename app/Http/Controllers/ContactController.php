<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(Request $request)
    {
        $content = $request->content;
        $email = $request->email;
        $phone = $request->phone;
       

        return DB::table('contact')->insert([
            'content' => $content, 'email' => $email, 'phone' => $phone
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    function index(){
        $comment = Comment::all();
        return json_encode($comment);
    }
      function getCommentByVendor($id){
        
          $comments = DB::select("select u.name, c.content from user as u, comment as c, vendors as v where v.id = $id and u.id= c.user_id and c.vendor_id = v.id");
         return response()->json($comments);
    }
    function addCommentByVendor(Request $request, $id){      
        $content = $request->content;
        $user_id = $request->user_id;
        $vendor_id = $id;
        
        return DB::table('comment')->insert([
            'content'=>$content,'user_id'=>$user_id,'vendor_id'=>$vendor_id
        ]); 
      }
}
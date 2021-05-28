<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Comment_vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    function index()
    {
        $comment = Comment::all();
        return json_encode($comment);
    }
    function getCommentByVendor($id)
    {

        $commentsvd = DB::select("select u.name,c.user_id, c.content, c.id from users as u, comment_vendor as c, vendors as v where v.id = $id and u.id= c.user_id and c.vendor_id = v.id");
        return json_encode($commentsvd);
    }
    function getCommentByProduct($id)
    {

        $commentsprd = DB::select("select u.name, c.content,c.user_id, c.id from users as u, comment as c, products as p where p.id = $id and u.id= c.user_id and c.product_id = p.id");
        return response()->json($commentsprd);
    }
    function addCommentByProduct(Request $request, $id)
    {
        $content = $request->content;
        $user_id = $request->user_id;
        $vendor_id = $id;
        $product_id = $request->product_id;

        return DB::table('comment')->insert([
            'content' => $content, 'user_id' => $user_id, 'vendor_id' => $vendor_id, 'product_id' => $product_id
        ]);
    }

    function addCommentByVendor(Request $request, $id)
    {
        $content = $request->content;
        $user_id = $request->user_id;
        $vendor_id = $id;

        return DB::table('comment_vendor')->insert([
            'content' => $content, 'user_id' => $user_id, 'vendor_id' => $vendor_id
        ]);
    }
    function distroyCommentByProduct($id)
    {
        $cmtvendor = Comment::find($id)->delete();
        return json_encode($cmtvendor);
    }
    function distroyCommentByVendor($id)
    {
        $cmtproduct = Comment_vendor::find($id)->delete();
        return json_encode($cmtproduct);
    }
}

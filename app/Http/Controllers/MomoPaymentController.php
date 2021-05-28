<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MomoPaymentController extends Controller
{
    //
    public function momoWebPayment(Request $request) {
        // $totalPrice = DB::select("SELECT sum(products.price * order_list.quantity) as sumPrice 
        // FROM order_list  JOIN products  ON order_list.product_id = products.id")->toArray();
        $accessKey = "F8BBA842ECF85";
        $notifyUrl= "https://momo.vn";
        $returnUrl= "https://momo.vn"; //link web xong khi thanh toán muốn trả về
        $orderId= "Queen".rand(100, 9999999);
        $amount= "5000000";
        $data="partnerCode=MOMO&accessKey=F8BBA842ECF85&requestId=MM1540456472575&amount=".$amount."&orderId=".$orderId."&orderInfo=Queen Party Payment&returnUrl=".$returnUrl."&notifyUrl=https://momo.vn&extraData=email=abc@gmail.com";
        $secret='K951B6PE1waDMi640xX08PD3vg6EkVlz';
        $signature = hash_hmac('sha256',$data,$secret);
        $response = Http::post('https://test-payment.momo.vn/gw_payment/transactionProcessor',
            [  
                "accessKey"=>"F8BBA842ECF85",
                "partnerCode"=> "MOMO",
                "requestType"=> "captureMoMoWallet",
                "notifyUrl"=> "https://momo.vn",
                "returnUrl"=> $returnUrl,
                "orderId"=> $orderId,
                "amount"=>  $amount,
                "orderInfo"=> "Queen Party Payment",
                "requestId"=> "MM1540456472575",
                "extraData"=> "email=abc@gmail.com",
                "signature"=> $signature,
            ]
        );
       return $response;
    }
}

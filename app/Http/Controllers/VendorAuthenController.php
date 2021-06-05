<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorAuthenController extends Controller
{
   
    public function updateStatus(Request $request,$id){
        $order = Order::find($id);
        if($request->type == 2){
            $billTrucker = DB::select('SELECT COUNT(*) as count FROM bills, orders WHERE orders.type = 2 and bills.id_trucker = '.$request->id_trucker);
            if($billTrucker[0]->count !== 0){
                return response()->json('Trucker exist', 400);
            }else {
            $bill = new Bill;
            $bill->id_order = $order->id;
            $bill->id_sender = $order->id_user;
            $bill->id_truck = $order->id_truck;
            $bill->id_trucker = $request->id_trucker;
            $bill->save();
            $order->type = $request->type;
            $order->save();
            //notify for user
            
            $users = User::find($request->id_trucker);
            $devices = TokenDevice::where('id_user', $order->id_user)->get();
                foreach ($devices as $device) {
                    $devicesId[] = $device->token;
            }
            $title = "Tài xế ".$users->full_name." đã nhận đơn hàng #".$order->id." của bạn!";
            $body = "Bạn hãy chuẩn bị đơn hàng, Tài xế sẽ đến sau vài phút nữa thôi";
            app('App\Http\Controllers\NotificationController')->pushNotification('order','',$title, $body, $devicesId); 
            $notification = new Notification;
            $notification->title = $title;
            $notification->message =  $body;
            $notification->isRead = false;
            $notification->type = 1;
            $notification->id_user = $order->id_user;
            $notification->save();
         
             //notify for trucker
             $devices_2 = TokenDevice::where('id_user', $request->id_trucker)->get();
                foreach ($devices_2 as $device) {
                    $devicesId_2[] = $device->token;
            }
             $title_2 = "Chúc mừng bạn đã nhận đơn hàng thành công!";
             $body_2 = "Hãy chuẩn bị xe và đến địa điểm lấy hàng";
             app('App\Http\Controllers\NotificationController')->pushNotification('order','',$title_2, $body_2, $devicesId_2); 
            $notification = new Notification;
            $notification->title = $title_2;
            $notification->message = $body_2;
            $notification->isRead = false;
            $notification->type = 1;
            $notification->id_user = $request->id_trucker;
            $notification->save();
            return response()->json('Success', 200);
            }
        }else if($request->type == 3){
            $order->type = $request->type;
            $order->save();
            //send mail to sender
            $user = User::find($order->id_user);
            $send_from = json_decode($order->send_from, TRUE);
            $receiver_info = json_decode($order->receiver_info, TRUE);
            $sender_info = json_decode($order->sender_info, TRUE);
            $send_to = json_decode($order->send_to, TRUE);
            if($order->insurance_fee==true){
                $insurance_fee = ($order->price/1.35)*0.25;
                $message = [
                    'id' => $order->id,
                    'name' => $order->name,
                    'insurance_fee' => $insurance_fee,
                    'vat'=> ($order->price/1.35)*0.1 ,
                    'total'=>$order->price,
                    'price'=>$order->price/1.35,
                    'sender_name'=>$sender_info['name'],
                    'sender_phone'=>$sender_info['phone'],
                    'sender_address'=>$send_from['address'].', '.$send_from['city'],
                    'receiver_name'=>$receiver_info['name'],
                    'receiver_phone'=>$receiver_info['phone'],
                    'receiver_address'=>$send_to['address'].', '.$send_to['city'],
                ];
            }else{
                $insurance_fee = 0;
                $message = [
                    'id' => $order->id,
                    'name' => $order->name,
                    'insurance_fee' => $insurance_fee,
                    'vat'=> ($order->price/1.1)*0.1 ,
                    'total'=>$order->price,
                    'price'=>$order->price/1.1,
                    'sender_name'=>$sender_info['name'],
                    'sender_phone'=>$sender_info['phone'],
                    'sender_address'=>$send_from['address'].', '.$send_from['city'],
                    'receiver_name'=>$receiver_info['name'],
                    'receiver_phone'=>$receiver_info['phone'],
                    'receiver_address'=>$send_to['address'].', '.$send_to['city'],
                ];
            }
            SendEmail::dispatch($message, $user)->delay(now()->addMinute(1));
            //notify for user
            $devices = TokenDevice::where('id_user', $order->id_user)->get();
                foreach ($devices as $device) {
                    $devicesId[] = $device->token;
            }
            $title = "Đơn hàng của bạn đã được giao thành công!";
            $body = "GoGo rất hân hạnh phục vụ quý khách! Bạn cảm thấy tài xế như thế nào? Đánh gia tài xế ngay";
            $users = User::find($request->id_trucker);
            $notification = new Notification;
            $notification->title =  $title;
            $notification->message = $body;
            $notification->isRead = false;
            $notification->type = 3;
            $notification->id_user = $order->id_user;
            $notification->save();
            app('App\Http\Controllers\NotificationController')->pushNotification('order','',$title, $body, $devicesId); 
            //notify for trucker
            $devices_2 = TokenDevice::where('id_user', $request->id_trucker)->get();
            foreach ($devices_2 as $device) {
                $devicesId_2[] = $device->token;
            }
            $title_2 = "Chúc mừng bạn đã giao đơn hàng thành công!";
            $body_2 = "Tiền đã vào tài khoản của bạn. GoGo xin phép nhận 5% phí đơn hàng";
            $notification = new Notification;
            $notification->title = $title_2;
            $notification->message = $body_2;
            $notification->isRead = false;
            $notification->type = 2;
            $notification->id_user = $request->id_trucker;
            $notification->save();
            app('App\Http\Controllers\NotificationController')->pushNotification('order','',$title_2, $body_2, $devicesId_2); 
            if($order->insurance_fee==true){
                $amount = ($order->price/1.35)*0.95;
            }
            else{
                $amount = ($order->price/1.1)*0.95;
            }
            app('App\Http\Controllers\TruckerController')->updateAmount($request->id_trucker,$amount); 
            Message::where('id_send', $order->id_user)->delete();
            Message::where('id_send', $request->id_trucker)->delete();
            return response()->json('Success', 200);
        }
        return response()->json($order,200);
    }


}

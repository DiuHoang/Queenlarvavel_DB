<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            'name' => "Tien Nguyen Thi1",
            'phone' => '039587356',
            'address'=>'101 Le Huu Trac, Phuoc My, Son Tra, Da Nang',
            'order_time'=>'2021-04-24 08:00',
            'note' => 'ko',
            'user_id'=>1,
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

         //
         DB::table('orders')->insert([
            'name' => "Tien Nguyen Thi2",
            'phone' => '039587356',
            'address'=>'101 Le Huu Trac, Phuoc My, Son Tra, Da Nang',
            'order_time'=>'2021-04-24 08:00',
            'note' => 'ko',
            'user_id'=>1,
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

         //
         DB::table('orders')->insert([
            'name' => "Tien Nguyen Thi3",
            'phone' => '039587356',
            'address'=>'101 Le Huu Trac, Phuoc My, Son Tra, Da Nang',
            'order_time'=>'2021-04-24 08:00',
            'note' => 'ko',
            'user_id'=>1,
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

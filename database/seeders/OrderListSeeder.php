<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrderListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('order_list')->insert([
            'product_id'=>1,
            'vendor_id'=> 1,
            'user_id'=> 1,
            'quantity' =>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('order_list')->insert([
            'product_id'=>2,
            'vendor_id'=> 2,
            'user_id'=> 2,
            'quantity' =>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('order_list')->insert([
            'product_id'=>3,
            'vendor_id'=> 3,
            'user_id'=> 3,
            'quantity' =>3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('order_list')->insert([
            'product_id'=>4,
            'vendor_id'=> 4,
            'user_id'=> 4,
            'quantity' =>4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    

    }
}

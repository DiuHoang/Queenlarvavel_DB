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
            'product_id'=>1,
            'vendor_id'=> 1,
            'user_id'=> 2,
            'quantity' =>3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    

    }
}

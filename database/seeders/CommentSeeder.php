<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comment')->insert([
        	[
                'content'=>'Nhà hàng thân thiện, phục vụ tốt, và dịch vụ đồ ăn ngon miệng',
                'user_id'=>1,
                'product_id'=>5,
                'vendor_id'=>2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'content'=>'Nhà hàng thân thiện, phục vụ tốt, và dịch vụ đồ ăn ngon miệng',
                'user_id'=>1,
                'product_id'=>4,
                'vendor_id'=>3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'content'=>'Nhà hàng thân thiện, phục vụ tốt, và dịch vụ đồ ăn ngon miệng',
                'user_id'=>1,
                'product_id'=>3,
                'vendor_id'=>4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'content'=>'Nhà hàng thân thiện, phục vụ tốt, và dịch vụ đồ ăn ngon miệng',
                'user_id'=>1,
                'product_id'=>2,
                'vendor_id'=>5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}

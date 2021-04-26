<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rate')->insert([
        	[
                'quantity'=>5,
                'user_id'=>1,
                'product_id'=>1,
        	],
        	[
                'quantity'=>4,
                'user_id'=>1,
                'product_id'=>1,
            ],
        	[
                'quantity'=>5,
                'user_id'=>2,
                'product_id'=>1,
            ],
        	[
                'quantity'=>5,
                'user_id'=>1,
                'product_id'=>1,
            ],
        	[
                'quantity'=>5,
                'user_id'=>2,
                'product_id'=>1,
            ]
        ]);
    }
}

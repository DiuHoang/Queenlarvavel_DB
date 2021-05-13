<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            // Food - Nha hang 1 - Bep Cuon restaurant
        	[
                'name'=>'Bánh cuốn',
                'picture'=>'public/images/Food/BepCuon/banhCuon.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1,
                // 'created_at' => date("Y-m-d H:i:s"),
                // 'updated_at' => date("Y-m-d H:i:s"),
        	],
            [
                'name'=>'Bánh xèo',
                'picture'=>'public/images/Food/BepCuon/banhXeo.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1,
                // 'created_at' => date("Y-m-d H:i:s"),
                // 'updated_at' => date("Y-m-d H:i:s"),
        	],
            [
                'name'=>'Cháo truyền thống',
                'picture'=>'public/images/Food/BepCuon/chaoTruyenThong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1,
                // 'created_at' => date("Y-m-d H:i:s"),
                // 'updated_at' => date("Y-m-d H:i:s"),
        	]
        ]);
    }
}

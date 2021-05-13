<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vendors')->insert([
        	[
                'name'=>'Bếp Cuốn Đà Nẵng',
                'phone'=>'+84 70 2689 989',
                'email'=>'nhahangbepcuon@gmail.com',
                'address'=>'54 Nguyễn Văn Thoại, Ngũ Hành Sơn, Đà Nẵng',
                'avatar'=>'/public/images/Food/BepCuon/bepCuon.PNG',
                'description'=>'$$ - $$$, Kiểu Á, Kiểu Việt, Tốt cho sức khỏe',
                'service_category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
        	],
        	[
                'name'=>'Citron Restaurant',
                'phone'=>'+84 236 3938 888',
                'email'=>'nhahangcitron@gmail.com',
                'address'=>'Hoàng Sa InterContinental Danang Sun Peninsula Resort, Đà Nẵng',
                'avatar'=>'/public/images/Food/CitronRestaurant/Citron Restaurant.PNG',
                'description'=>'$$ - $$$, Kiểu Á, Kiểu Việt, Tốt cho sức khỏe',
                'service_category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Memory Lounge',
                'phone'=>'+84 511 3575 899',
                'email'=>'nhahangbepcuon@gmail.com',
                'address'=>'7 Bạch Đằng street, Hải Châu, Đà Nẵng',
                'avatar'=>'/public/images/Food/Memory/memory.PNG',
                'description'=>'$$ - $$$, Kiểu Á, Kiểu Việt, Tốt cho sức khỏe',
                'service_category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Nhà hàng Mộc Sea Food',
                'phone'=>'+84 90 566 50 58',
                'email'=>'nhahangmocseafood@gmail.com',
                'address'=>'26 Tô Hiến Thành, Sơn Trà, Da Nang',
                'avatar'=>'/public/images/Food/MocSeafood/mocseafood.PNG',
                'description'=>'$ - Hải sản kiểu Á, Cửa hàng thức ăn ngon',
                'service_category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}

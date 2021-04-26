<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service_category')->insert([
        	[
                'name'=>'Loa máy',
                'picture'=>'/public/images/Speaker/Danasound/Loa Jamo C93 (Bookshelf).PNG',
                'description' => 'Chào các bạn: trong hệ thống nghe nhìn có lẽ loa và micro là bộ phận kém phát triển nhất. Ra đời từ hơn 100 năm qua thật sự nó chẳng có thay đổi gì đang kể. Nó gần như là 1 huyền thoại, mọi người nói về nó rất nhiều nhưng kết quả thường rất mông lung.'
        	],
        	[
                'name'=>'Bánh kem',
                'picture'=>'/public/images/Cake/baHung/banhGau.jpg',
                'description' =>'Bánh kem là một loại bánh chứa đầy sự êm ái, nhẹ nhàng và sáng tạo.'
            ],
        	[
                'name'=>'Vật dụng trang trí',
                'picture'=>'/public/images/Decor/Chino Wedding & Events/1.jpg',
                'description' =>'Có rất nhiều vật dụng trang trí độc lạ xinh xắn, với rất nhiều mức giá và nhiều mực độ cao thấp khác nhau.'
            ],
        	[
                'name'=>'Thức ăn',
                'picture'=>'/public/images/Food/Memory/banhCuon.PNG',
                'description' =>'Nhắc đến Ẩm thực Việt, rất nhiều Đầu bếp nổi tiếng phải trầm trồ vì sự đa dạng, phong phú, nhiều màu sắc.'
            ]
        ]);
    }
}

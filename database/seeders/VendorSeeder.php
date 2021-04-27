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
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'ABC bakery',
                'phone'=>'0998289355',
                'email'=>'abccake@gmail.com',
                'address'=>'99 To Hien Thanh, Da Nang',
                'avatar'=>'/public/images/Cake/ABC/logo.jpg',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Anh Quân bakery',
                'phone'=>'0998289355',
                'email'=>'anhquanbakery@gmail.com',
                'address'=>'99 To Hien Thanh, Da Nang',
                'avatar'=>'/public/images/Cake/anhQuan/logo.png',
                'description'=>'Chất liệu làm nên thương hiệu',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Ba Hưng bakery',
                'phone'=>'0998289355',
                'email'=>'bahungbakery@gmail.com',
                'address'=>'99 To Hien Thanh, Da Nang',
                'avatar'=>'/public/images/Cake/baHung/logo.jpg',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Đồng Tiến bakery',
                'phone'=>'0998289355',
                'email'=>'dongtienbakery@gmail.com',
                'address'=>'99 To Hien Thanh, Da Nang',
                'avatar'=>'/public/images/Cake/dongTien/logo.jpg',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Chino Wedding & Events',
                'phone'=>'090 644 7367',
                'email'=>'chinoflower99@gmail.com',
                'address'=>'55 Phạm Văn Nghị, Hải Châu, Đà Nẵng',
                'avatar'=>'/public/images/Decor/Chino Wedding & Events/logo.jpg',
                'description'=>'Dịch vụ chuyên nghiệp, phù hợp với từng khách hàng',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Dịch vụ Cưới Hỏi Cát Tiên',
                'phone'=>'0772 515 177',
                'email'=>'dichvucuoihoicattien@gmail.com',
                'address'=>'18 - 20 Trần Cao Vân, Đà Nẵng',
                'avatar'=>'/public/images/Decor/DVCuoiHoiCatTien/logo.jpg',
                'description'=>'Dịch vụ chuyên nghiệp, nhân viên tận tình',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Giấy Wedding Decoration',
                'phone'=>'0902 591 092',
                'email'=>'giay.decor@gmail.com',
                'address'=>'118 Lương Nhữ Học, Hải Châu, Đà Nẵng',
                'avatar'=>'/public/images/Decor/GIAYWeddingDecoration/1.jpg',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'LAROSE Wedding decor',
                'phone'=>'0929 393 404',
                'email'=>'lasore.weddingdecor@gmail.com',
                'address'=>'197 Trần Xuân Lê, Thanh Khê, Đà Nẵng',
                'avatar'=>'/public/images/Decor/LAROSEweddingdecor/logo.jpg',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Âm thanh ánh sáng Hoàng Long',
                'phone'=>'+84 511 382 3737',
                'email'=>'vanphong@hoanglongatas.com.vn',
                'address'=>'108 Nguyễn Thị Minh Khai, Hải Châu, Đà Nẵng',
                'avatar'=>'/public/images/Speaker/AmThanhAnhSangHoangLong/logo.PNG',
                'description'=>'Dàn thiết bị đầy đủ và hiện đại',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Âm thanh ánh sáng Danasound',
                'phone'=>'0905 699 829',
                'email'=>'dangkhoabt1@gmail.com',
                'address'=>'293/4 Nguyễn Tất Thành, Hải Châu, Đà Nẵng',
                'avatar'=>'/public/images/Speaker/Danasound/logo.PNG',
                'description'=>'Luôn cố gắng đáp ứng mọi yêu cầu từ mọi khách hàng',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'Công ty tổ chức sự kiện Sea Event',
                'phone'=>'0968 37 4343',
                'email'=>'seaevent@gmail.com',
                'address'=>'183 Huỳnh Tấn Phát, Hải Châu, Đà Nẵng',
                'avatar'=>'/public/images/Speaker/SeaEvent/logo.PNG',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'name'=>'TSK Media - Thuê âm thanh ánh sáng',
                'phone'=>'0236 350 1168',
                'email'=>'tskmediadn@gmail.com',
                'address'=>'60 Trần Quý Cáp, Hải Châu, Đà Nẵng',
                'avatar'=>'/public/images/Speaker/TSkMedia/logo.PNG',
                'description'=>'Làm việc nhanh nhẹn, âm thanh ánh sáng chất lượng đạt chuẩn',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
            ]);
    }
}

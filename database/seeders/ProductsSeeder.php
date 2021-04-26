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
                'vendor_id' =>1
        	],
            [
                'name'=>'Bánh xèo',
                'picture'=>'public/images/Food/BepCuon/banhXeo.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
        	],
            [
                'name'=>'Cháo truyền thống',
                'picture'=>'public/images/Food/BepCuon/chaoTruyenThong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
        	],
            [
                'name'=>'Há Cảo',
                'picture'=>'public/images/Food/BepCuon/haCao.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
        	],
            [
                'name'=>'Khoai tây chiên',
                'picture'=>'public/images/Food/BepCuon/khoaiTayChien.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
        	],
        	[
                'name'=>'Lẩu cá hồi',
                'picture'=>'public/images/Food/BepCuon/lauCaHoi.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
            ],
        	[
                'name'=>'Mỳ xào hải sản',
                'picture'=>'public/images/Food/BepCuon/miXaoHaiSan.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
            ],
        	[
                'name'=>'Nấm Chiên giòn',
                'picture'=>'public/images/Food/BepCuon/namChienGion.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
            ],
        	[
                'name'=>'Top mỡ rang',
                'picture'=>'public/images/Food/BepCuon/tepMoRang.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
            ],
            [
                'name'=>'Thịt cuốn tròn',
                'picture'=>'public/images/Food/BepCuon/thitTron.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
        	],
        	[
                'name'=>'Thịt xiên nướng',
                'picture'=>'public/images/Food/BepCuon/thitXienNuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
            ],
        	[
                'name'=>'Bánh xèo',
                'picture'=>'public/images/Food/BepCuon/banhXeo.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>1
            ],
            // Food - Nha hang 2 - Citron restaurant
        	[
                'name'=>'Bánh cuốn',
                'picture'=>'public/images/Food/CitronRestaurant/banhCuon.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>2
            ],
        	[
                'name'=>'Gà nướng lá chanh',
                'picture'=>'public/images/Food/CitronRestaurant/gaNuonglaChanh.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>2
            ],
            [
                'name'=>'Heo mồi hấp',
                'picture'=>'public/images/Food/CitronRestaurant/HeoMoiHap.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>2
        	],
        	[
                'name'=>'Heo Mồi xào Lan',
                'picture'=>'public/images/Food/CitronRestaurant/heoMoiXaolan.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>2
            ],
        	[
                'name'=>'Nấm chiên giòn',
                'picture'=>'public/images/Food/CitronRestaurant/namChienGion.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>2
            ],
            [
                'name'=>'Top mỡ rang',
                'picture'=>'public/images/Food/CitronRestaurant/tepMoRang.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>2
            ],
            [
                'name'=>'Thịt xiên nướng',
                'picture'=>'public/images/Food/CitronRestaurant/thitXienNuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>2
            ],
            // Food - Nha hang 3 - Memory 
            [
                'name'=>'Bánh cuốn',
                'picture'=>'public/images/Food/Memory/banhCuon.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
            [
                'name'=>'Cơm chiên',
                'picture'=>'public/images/Food/Memory/comchien.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
        	[
                'name'=>'Gà nướng',
                'picture'=>'public/images/Food/Memory/ganuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
        	[
                'name'=>'Mực lá hấp',
                'picture'=>'public/images/Food/Memory/mucLaHap.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
            [
                'name'=>'Ngêu nướng',
                'picture'=>'public/images/Food/Memory/ngeunuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
        	],
        	[
                'name'=>'Ram cuốn',
                'picture'=>'public/images/Food/Memory/ram.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
        	[
                'name'=>'Thịt nướng',
                'picture'=>'public/images/Food/Memory/thitNuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
        	[
                'name'=>'Tôm chiên giòn',
                'picture'=>'public/images/Food/Memory/tomchiengion.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
            [
                'name'=>'Xôi cuốn rong biển',
                'picture'=>'public/images/Food/Memory/xoiCuonRongBien.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
            [
                'name'=>'Xương hầm đậu đen',
                'picture'=>'public/images/Food/Memory/xuonghamdauden.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>3
            ],
            // Food - Nha hang 4 - Moc Sea Food
            [
                'name'=>'Cá chim nướng',
                'picture'=>'public/images/Food/MocSeafood/caChimNuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Cá trê mắm ớt',
                'picture'=>'public/images/Food/MocSeafood/caTreMamOt.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
        	[
                'name'=>'Cơm chiên trân châu',
                'picture'=>'public/images/Food/MocSeafood/comChienTranChau.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Hàu nướng',
                'picture'=>'public/images/Food/MocSeafood/hauNuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Ngêu hấp sả',
                'picture'=>'public/images/Food/MocSeafood/ngeuHapSa.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Nghêu rim',
                'picture'=>'public/images/Food/MocSeafood/ngheuRim.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Óc Hương rim muối',
                'picture'=>'public/images/Food/MocSeafood/ocHuongRimMuoi.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Rau muống chiên',
                'picture'=>'public/images/Food/MocSeafood/rauMuongChien.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Sa lach tròn',
                'picture'=>'public/images/Food/MocSeafood/saLachTron.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Tôm nướng',
                'picture'=>'public/images/Food/MocSeafood/TomNuong.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            [
                'name'=>'Tôm tít hấp dầu',
                'picture'=>'public/images/Food/MocSeafood/tomTitHapDau.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>1,
                'vendor_id' =>4
            ],
            // Cake - Cua hang 1 - ABC
            [
                'name'=>'Bánh kem ABC',
                'picture'=>'public/images/Cake/ABC/cake1.png',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>5
            ],
            [
                'name'=>'Bánh kem ABC',
                'picture'=>'public/images/Cake/ABC/cake2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>5
            ],
            [
                'name'=>'Bánh kem ABC',
                'picture'=>'public/images/Cake/ABC/cake3.png',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>5
            ],
            [
                'name'=>'Bánh kem ABC',
                'picture'=>'public/images/Cake/ABC/cake4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>5
            ],
            [
                'name'=>'Bánh kem ABC',
                'picture'=>'public/images/Cake/ABC/cake5.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>5
            ],
            [
                'name'=>'Bánh kem ABC',
                'picture'=>'public/images/Cake/ABC/cake6.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>5
            ],
            [
                'name'=>'Bánh kem ABC',
                'picture'=>'public/images/Cake/ABC/cake7.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>5
            ],
            // Cake - Cua hang 2 - Anh Quan
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake5.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake6.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake7.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            [
                'name'=>'Bánh kem anh Quân',
                'picture'=>'public/images/Cake/anhQuan/cake8.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>6
            ],
            // Cake - Cua hang 3 - Ba Hưng
            [
                'name'=>'Bánh gấu',
                'picture'=>'public/images/Cake/baHung/banhGau.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bánh trái cây',
                'picture'=>'public/images/Cake/baHung/banhTraiCay.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bắp',
                'picture'=>'public/images/Cake/baHung/bap.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Cherry',
                'picture'=>'public/images/Cake/baHung/cherry.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bánh cốm',
                'picture'=>'public/images/Cake/baHung/com.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bánh công chúa',
                'picture'=>'public/images/Cake/baHung/congchua.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bánh dâu',
                'picture'=>'public/images/Cake/baHung/dau.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bánh Doreamon',
                'picture'=>'public/images/Cake/baHung/doreamon.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bánh full dâu',
                'picture'=>'public/images/Cake/baHung/fulldau.jpeg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            [
                'name'=>'Bánh Orio',
                'picture'=>'public/images/Cake/baHung/orio.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>7
            ],
            // Cake - Cua hang 4 - Đồng Tiến
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/cake2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/cake3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/cake4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/cake5.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/cake6.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/cute.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/fullbap.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            [
                'name'=>'Bánh Đồng Tiến',
                'picture'=>'public/images/Cake/baHung/thanTai.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>2,
                'vendor_id' =>8
            ],
            // Decor - Nha hang 1 - Chino Wedding & Events
            [
                'name'=>'Đồ trang trí Chino',
                'picture'=>'public/images/Decor/Chino Wedding & Events/1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>9
            ],
            [
                'name'=>'Đồ trang trí Chino',
                'picture'=>'public/images/Decor/Chino Wedding & Events/2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>9
            ],
            [
                'name'=>'Đồ trang trí Chino',
                'picture'=>'public/images/Decor/Chino Wedding & Events/3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>9
            ],
            [
                'name'=>'Đồ trang trí Chino',
                'picture'=>'public/images/Decor/Chino Wedding & Events/4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>9
            ],
            [
                'name'=>'Đồ trang trí Chino',
                'picture'=>'public/images/Decor/Chino Wedding & Events/5.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>9
            ],
            [
                'name'=>'Đồ trang trí Chino',
                'picture'=>'public/images/Decor/Chino Wedding & Events/6.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>9
            ],
            // Decor - Nha hang 2 - DV Cát Tiên
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/5.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/6.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/7.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            [
                'name'=>'Dịch vụ Cát Tiên',
                'picture'=>'public/images/Decor/DVCuoihoiCatTien/8.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>10
            ],
            // Decor - Nha hang 3 - Giấy Wedding
            [
                'name'=>'Dịch vụ Giấy Wedding',
                'picture'=>'public/images/Decor/GIAYWeddingDecoratrion/1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>11
            ],
            [
                'name'=>'Dịch vụ Giấy Wedding',
                'picture'=>'public/images/Decor/GIAYWeddingDecoratrion/2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>11
            ],
            [
                'name'=>'Dịch vụ Giấy Wedding',
                'picture'=>'public/images/Decor/GIAYWeddingDecoratrion/3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>11
            ],
            [
                'name'=>'Dịch vụ Giấy Wedding',
                'picture'=>'public/images/Decor/GIAYWeddingDecoratrion/4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>11
            ],
            [
                'name'=>'Dịch vụ Giấy Wedding',
                'picture'=>'public/images/Decor/GIAYWeddingDecoratrion/5.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>11
            ],
            [
                'name'=>'Dịch vụ Giấy Wedding',
                'picture'=>'public/images/Decor/GIAYWeddingDecoratrion/6.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>11
            ],
            [
                'name'=>'Dịch vụ Giấy Wedding',
                'picture'=>'public/images/Decor/GIAYWeddingDecoratrion/7.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>11
            ],
            // Decor - Nha hang 4 - LAROSE
            [
                'name'=>'Dịch vụ LAROSE Wedding',
                'picture'=>'public/images/Decor/LAROSEweddingdecor/1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>12
            ],
            [
                'name'=>'Dịch vụ LAROSE Wedding',
                'picture'=>'public/images/Decor/LAROSEweddingdecor/2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>12
            ],
            [
                'name'=>'Dịch vụ LAROSE Wedding',
                'picture'=>'public/images/Decor/LAROSEweddingdecor/3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>12
            ],
            [
                'name'=>'Dịch vụ LAROSE Wedding',
                'picture'=>'public/images/Decor/LAROSEweddingdecor/4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>12
            ],
            [
                'name'=>'Dịch vụ LAROSE Wedding',
                'picture'=>'public/images/Decor/LAROSEweddingdecor/5.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>12
            ],
            [
                'name'=>'Dịch vụ LAROSE Wedding',
                'picture'=>'public/images/Decor/LAROSEweddingdecor/6.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>12
            ],
            [
                'name'=>'Dịch vụ LAROSE Wedding',
                'picture'=>'public/images/Decor/LAROSEweddingdecor/7.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>3,
                'vendor_id' =>12
            ],
            // Speaker - Nha hang 1 - Hoàng Long
            [
                'name'=>'Loa Jamo C93 (Bookshelf)',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/Loa Jamo C93 (Bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            [
                'name'=>'Loa Jamo C93',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/Loa Jamo C93.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            [
                'name'=>'Loa Klipsch RB 81ll',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/Loa Klipsch RB 81II (bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            [
                'name'=>'Loa Hoàng Long',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/loa1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            [
                'name'=>'Loa Hoàng Long',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/loa2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            [
                'name'=>'Loa Hoàng Long',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/loa3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            [
                'name'=>'Loa Hoàng Long',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/loa4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            [
                'name'=>'Loa Hoàng Long',
                'picture'=>'public/images/Speaker/AmThanhAnhSangHoangLong/loa5.png',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>13
            ],
            // Speaker - Nha hang 2 - Danasound
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/Loa Jamo C93 (Bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/Loa Jamo C93.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/Loa Klipsch RB 81II (bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/loa1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/loa2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/loa3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/loa4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            [
                'name'=>'Loa DanaSound',
                'picture'=>'public/images/Speaker/Danasound/loa5.png',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>14
            ],
            // Speaker - Nha hang 3 - Sea Event
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/Loa Jamo C93 (Bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/Loa Jamo C93.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/Loa Klipsch RB 81II (bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/loa1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/loa2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/loa3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/loa4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa Sea Events',
                'picture'=>'public/images/Speaker/SeaEvent/loa5.png',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            // Speaker - Nha hang 4 - TSK Media
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/Loa Jamo C93 (Bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/Loa Jamo C93.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/Loa Klipsch RB 81II (bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/loa1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/loa2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/loa3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/loa4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
            [
                'name'=>'Loa TSk Media',
                'picture'=>'public/images/Speaker/TSKMedia/loa5.png',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'service_category_id'=>4,
                'vendor_id' =>15
            ],
        ]);
    }
}

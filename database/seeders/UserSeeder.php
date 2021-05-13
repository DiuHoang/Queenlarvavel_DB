<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	[
                'name'=>'Quan Ho',
                'phone'=>'0235984521',
                'email'=>'quanho1@gmail.com',
                'address'=>'Quang Tri',
                'password'=>'quanho123',
                'created_at' => date("2021-01-13 14:32:39"),
                'updated_at' => date("2021-01-13 14:32:39")
        	],
            [
                'name'=>'Tien Nguyen',
                'phone'=>'0235963521',
                'email'=>'tiennguyen@gmail.com',
                'address'=>'Da Nang',
                'password'=>'tiennguyen123',
                'created_at' => date("2021-02-13 14:32:39"),
                'updated_at' => date("2021-02-13 14:32:39")
                
        	],
            [
                'name'=>'Diu Hoang',
                'phone'=>'0232184521',
                'email'=>'diuhoang@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'diuhoang123',
                'created_at' => date("2021-02-13 14:32:39"),
                'updated_at' => date("2021-02-13 14:32:39")
        	],
            [
                'name'=>'Trang Tran',
                'phone'=>'0235979521',
                'email'=>'trangtran@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'trangtran123',
                'created_at' => date("2021-02-13 14:32:39"),
                'updated_at' => date("2021-02-13 14:32:39")
        	],
            [
                'name'=>'Quan Ho1',
                'phone'=>'0235984521',
                'email'=>'quanho11@gmail.com',
                'address'=>'Quang Tri',
                'password'=>'quanho123',
                'created_at' => date("2021-03-13 14:32:39"),
                'updated_at' => date("2021-03-13 14:32:39")
        	],
            [
                'name'=>'Tien Nguyen1',
                'phone'=>'0235963521',
                'email'=>'tiennguyen1@gmail.com',
                'address'=>'Da Nang',
                'password'=>'tiennguyen123',
                'created_at' => date("2021-03-13 14:32:39"),
                'updated_at' => date("2021-03-13 14:32:39")
        	],
            [
                'name'=>'Diu Hoang1',
                'phone'=>'0232184521',
                'email'=>'diuhoang1@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'diuhoang123',
                'created_at' => date("2021-04-13 14:32:39"),
                'updated_at' => date("2021-04-13 14:32:39")
        	],
            [
                'name'=>'Trang Tran1',
                'phone'=>'0235979521',
                'email'=>'trangtran1@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'trangtran123',
                'created_at' => date("2021-04-13 14:32:39"),
                'updated_at' => date("2021-04-13 14:32:39")
        	],
            [
                'name'=>'Quan Ho2',
                'phone'=>'0235984521',
                'email'=>'quanho12@gmail.com',
                'address'=>'Quang Tri',
                'password'=>'quanho123',
                'created_at' => date("2021-05-13 14:32:39"),
                'updated_at' => date("2021-05-13 14:32:39")
        	],
            [
                'name'=>'Tien Nguyen2',
                'phone'=>'0235963521',
                'email'=>'tiennguye2n@gmail.com',
                'address'=>'Da Nang',
                'password'=>'tiennguyen123',
                'created_at' => date("2021-05-13 14:32:39"),
                'updated_at' => date("2021-05-13 14:32:39")
        	],
            [
                'name'=>'Diu Hoang2',
                'phone'=>'0232184521',
                'email'=>'diuhoang2@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'diuhoang123',
                'created_at' => date("2021-05-13 14:32:39"),
                'updated_at' => date("2021-05-13 14:32:39")
        	],
            [
                'name'=>'Trang Tran2',
                'phone'=>'0235979521',
                'email'=>'trangtran2@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'trangtran123',
                'created_at' => date("2021-05-13 14:32:39"),
                'updated_at' => date("2021-05-13 14:32:39")
        	]
        ]);
        
    }
}

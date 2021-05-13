<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
        	[
                'email'=>"quan.ho21@gmail.com",
                'phone'=>"0323200232",
                'content'=>"Can I .................some thing"
        	]
        ]);
    }
}

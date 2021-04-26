<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call('UserSeeder');
        $this->call('VendorSeeder');
        $this->call('ServiceCategorySeeder');
        $this->call('ProductsSeeder');
        $this->call('OrderListSeeder');
        $this->call('OrdersSeeder');
        $this->call('OrderDetailSeeder');
        $this->call('BillSeeder');
        $this->call('ContactSeeder');
        $this->call('ChatSeeder');
        $this->call('CommentSeeder');
        $this->call('RateSeeder');
    }
}

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
        $this->call(UserSeeder::class);
        $this->call(VendorSeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(OrderListSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderDetailSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(RateSeeder::class);
    }
}

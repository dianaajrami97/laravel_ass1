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
         \App\Models\Office::factory(10)->create();
         \App\Models\Customer::factory(50)->create();
         \App\Models\Employee::factory(20)->create();
         \App\Models\ProductLine::factory(20)->create();
         \App\Models\Product::factory(100)->create();
         \App\Models\Order::factory(200)->create();
         \App\Models\OrderProduct::factory(200)->create();
         \App\Models\Payment::factory(200)->create();
    }
}

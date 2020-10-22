<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductLine;
class ProductLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductLine::factory(20)->create();
    }
}

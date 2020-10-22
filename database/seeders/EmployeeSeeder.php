<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Employee;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory(20)->create();
    }
}

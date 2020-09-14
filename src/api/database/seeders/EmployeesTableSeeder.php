<?php

namespace Database\Seeders;
use App\Employee;
use Illuminate\Database\Seeder;
use Database\Seeders\factory;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        factory(App\Employee::class, 50)->create();

    }
}

<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            ['id' => 101, 'name' => 'Dhaka District', 'division_id' => 1],
            ['id' => 102, 'name' => 'Gazipur', 'division_id' => 1],
            ['id' => 103, 'name' => 'Chittagong District', 'division_id' => 2],
            ['id' => 104, 'name' => 'Coxs Bazar', 'division_id' => 2],
            // Add more districts as needed
        ];

        District::insert($districts);
    }
}

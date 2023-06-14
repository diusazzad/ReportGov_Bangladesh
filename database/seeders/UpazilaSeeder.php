<?php

namespace Database\Seeders;

use App\Models\Upazila;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpazilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $upazilas = [
            ['id' => '1001', 'district_id' => '101', 'division_id' => 1, 'name' => 'Amtali'],
            ['id' => '1002', 'district_id' => '102', 'division_id' => 1, 'name' => 'Bamna'],
            ['id' => '1003', 'district_id' => '103', 'division_id' => 2, 'name' => 'Barguna-S'],

        ];

        Upazila::insert($upazilas);
    }
}


// 1 - division
// 101 - 7 - district
// 100  -  - 13  - upazila
// 00029 - thana
// 00005 - union

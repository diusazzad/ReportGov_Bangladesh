<?php

namespace Database\Seeders;

use App\Models\Union;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unions = [
            ['name' => 'Union 1', 'thana_id' => 0001, 'upazila_id' => 001, 'district_id' => '02', 'division_id' => '01'],
            ['name' => 'Union 2', 'thana_id' => 001, 'upazila_id' => 001, 'district_id' => '02', 'division_id' => '01'],
            ['name' => 'Union 3', 'thana_id' => 002, 'upazila_id' => 002, 'district_id' => '03', 'division_id' => '01'],
             // Add more unions as needed
        ];

        Union::insert($unions);
    }
}


// 1 - division
// 017 - district
// 0013  - upazila
// 00029 - thana
// 00005 - union


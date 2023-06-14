<?php

namespace Database\Seeders;

use App\Models\Thana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thanas = [
             ['name' => 'Thana 1', 'upazila_id' => 0001, 'district_id' => '02', 'division_id' => '1'],
            ['name' => 'Thana 2', 'upazila_id' => 0001, 'district_id' => '02', 'division_id' => '1'],
             ['name' => 'Thana 3', 'upazila_id' => 0002, 'district_id' => '03', 'division_id' => '1'],
    // Add more thanas as needed
        ];

        Thana::insert($thanas);
    }
}

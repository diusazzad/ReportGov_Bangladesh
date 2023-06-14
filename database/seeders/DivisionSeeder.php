<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            ['id' => 1,'name' => 'Dhaka'],
            ['id' => 2,'name' => 'Chattogram'],
            ['id' => 3,'name' => 'Rajshahi'],
            ['id' => 4,'name' => 'Khulna'],
            ['id' => 5,'name' => 'Barishal'],
            ['id' => 6,'name' => 'Sylhet'],
            ['id' => 7,'name' => 'Mymensingh'],
            ['id' => 8,'name' => 'Rangpur'],

            // Add more divisions as needed
        ];
        Division::insert($divisions);
    }
}

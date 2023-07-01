<?php

namespace Database\Seeders;

use App\Models\retrieve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class retrieveStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        retrieve::factory()->count(10)->create();
    }
}
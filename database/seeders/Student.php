<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Students::factory()->count(10)->create();
    }
}
<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
      
    
     * @return array<string, mixed>
     */

    protected $model = Employee::class;
    public function definition(): array
    {
        return [
            'Firstname' => $this->faker->firstName(),
            'Lastname' => $this->faker->lastName(),
            'timeIn' => $this->faker->time(),
            'timeOut' => $this->faker->time(),
            'status' => "present"

        ];
    }
}
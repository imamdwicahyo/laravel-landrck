<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ArchiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            // 'type' => fake()->unique()->safeEmail(),
            'type' => 'File book',
            'consultant' => array_rand(['pegawai', 'staff', 'satker']),
            'contract_number' => Str::random(8),
            'bbws_office_id' => fake()->randomDigit(10),
            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    
}

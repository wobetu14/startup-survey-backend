<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => $this->faker->company,
            'company_region' => $this->faker->state,
            'company_city' => $this->faker->city,
            'company_email' => $this->faker->safeEmail,
            'company_telephone' => $this->faker->phoneNumber,
            'company_year_established' => $this->faker->numberBetween($min = 1900, $max = 2022),
            'company_sector' => $this->faker->word,
            'company_number_of_male_employees' => $this->faker->numberBetween($min = 1, $max = 1000),
            'company_number_of_female_employees' => $this->faker->numberBetween($min = 1, $max = 1000),
        ];
    }
}

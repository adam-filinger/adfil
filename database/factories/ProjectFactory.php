<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->domainName(),
            "description" => $this->faker->sentence(10, true), // Generates a random sentence with 10 words
            'skill_id' => \App\Models\Skill::get()->random()->id, // Assuming a project can be associated with a skill
        ];
    }
}

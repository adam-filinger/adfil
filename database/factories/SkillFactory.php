<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->word(),
            "experience" => $this->faker->numberBetween(1, 10) . ' years',
            "projects" => $this->faker->sentence(6, true) // Generates a random sentence with 6 words,
        ];
    }


    public function withProjects(array $projects): static
    {
        return $this->state(function ($args) use ($projects) {
            return [
                'projects' => implode(', ', $projects)
            ];
        });
    }

}
